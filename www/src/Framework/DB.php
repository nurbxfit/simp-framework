<?php

namespace Framework;

class DB {
    protected $table = null;
    protected $query = '';
    protected $bindings = [];

    public static function table(string $table) {
        $instance = new Self();
        $instance->table = $table;
        return $instance;
    }

    public function count() {
        // return the row count
        $this->query = "SELECT COUNT(*) as count FROM {$this->table}";
        return $this->execute()->fetchColumn();
    }

    public function find($id) {
        // filter based on the unique identifier
        return $this->where('id', '=', $id)->execute()->fetch();
    }

    public function where(string $column, string $operator , $value) {
        // add filter into the where query;
        if($value === null){
            $value = $operator;
            $operator = '=';
        }
        $this->query .= " WHERE {$column} {$operator} ?";
        $this->bindings[] = $value;
        return $this;
    }

    public function orderBy(string $column, string $direction = 'ASC') {
        $this->query .= " ORDER BY {$column} {$direction}";
        return $this;
    }

    public function take (int $value) {
        // add limit query;
        $this->query .= " LIMIT {$limit}";
        return $this;
    }

    public function skip (int $value) {
        // OFFSET (use in pagination)
        $this->query .= " OFFSET {$offset}";
        return $this;
    }

    public function select($columns = ['*']) {
        $columns = is_array($columns) ? implode(', ', $columns) : $columns;
        $this->query = "SELECT {$columns} FROM {$this->table}";
        return $this;
    }

    public function exclude(string $column) {
        // exclude a column from the select query
    }

    public function rawQuery(string $query){
        // execute user input query
    }

    public function execute(){
        // end method to be called to execute the query;
        $stmt = $this->getPdo()->prepare($this->query);
        $stmt->execute($this->bindings);
        return $stmt;
    }

    protected function getPdo(): \PDO {
        $dsn = sprintf(
            '%s:host=%s;port=%s;dbname=%s',
            $_ENV['DB_DRIVER'],
            $_ENV['DB_HOST'],
            $_ENV['DB_PORT'],
            $_ENV['DB_NAME']
        );
        return new \PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
    }
}