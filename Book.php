<?php

include_once __DIR__ . "/includes/db.php";

class Book{
    public $id;
    public $titolo;
    public $autore;
    public $descrizione;
    public $anno;
    
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function getAll(){
        $stmt = $this->pdo->prepare('SELECT * FROM books');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById(){
        $stmt = $this->pdo->prepare('SELECT * FROM books WHERE id = :id');
        $stmt->execute(['id' => $this->id]);
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if($book){
            $this->id = $book['id'];
            $this->titolo = $book['titolo'];
            $this->autore = $book['autore'];
            $this->anno = $book['anno'];
            $this->descrizione = $book['descrizione'];
        }
    }

    public function create(){


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $errors = [];

            if($errors === []){
               
                $this->titolo = $_POST['titolo'] ?? '';
                $this->autore = $_POST['autore'] ?? '';
                $this->descrizione = $_POST['descrizione'] ?? '';
                $this->anno = $_POST['anno'] ?? '';

                $stmt = $this->pdo->prepare('INSERT INTO books ( titolo, autore, descrizione, anno) VALUE ( :titolo, :autore, :descrizione, :anno)');
                $stmt->execute([
                    'titolo' => $this->titolo,
                    'autore' => $this->autore,
                    'descrizione' => $this->descrizione,
                    'anno' => $this->anno,
                ]);
                header('Location: /IFOA-BackEnd/Progetto%20S5-L5/index.php');
                exit();
            }
        }
    }

    public function update(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'] ?? $_GET['id'] ?? null ;

        if($id !== null){
        $stmt = $this->pdo->prepare('SELECT * FROM books WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

    if($book){

           
            $this->titolo = $_POST['titolo'] ?? $book['titolo'];
            $this->autore = $_POST['autore'] ?? $book['autore'];
            $this->anno = $_POST['anno'] ?? $book['anno'];
            $this->descrizione = $_POST['descrizione'] ?? $book['descrizione'];

            
                
                $stmt = $this->pdo->prepare('UPDATE books SET titolo = :titolo, autore = :autore, anno = :anno, descrizione = :descrizione WHERE id = :id');
                $stmt->execute([
                    'id' => $this->id,
                    'titolo' => $this->titolo,
                    'autore' => $this->autore,
                    'anno' => $this->anno,
                    'descrizione' => $this->descrizione,
                ]);


                header('Location: /IFOA-BackEnd/Progetto%20S5-L5/index.php');
                exit();
            }else{
                echo 'ID libro inestistente';
            }
        }}
    }

    public function delete(){
        $this->id = $_GET['id'] ?? '';
        $stmt = $this->pdo->prepare('DELETE FROM books WHERE id = :id');
        $stmt->execute([$this->id]);
    }

}