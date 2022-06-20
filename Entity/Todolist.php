<?php

namespace Entity {
    class Todolist
    {
        private int $id;

        private string $todo;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        function setId(int $id)
        {
            $this->id = $id;
        }

        function getId()
        {
            return $this->id;
        }

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}
