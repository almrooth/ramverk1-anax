<?php

namespace Anax\Book\HTMLForm;

use \Anax\HTMLForm\FormModel;
use \Anax\DI\DIInterface;
use \Anax\Book\Book;

/**
 * Form to create an item.
 */
class CreateForm extends FormModel
{
    /**
     * Constructor injects with DI container.
     *
     * @param Anax\DI\DIInterface $di a service container
     */
    public function __construct(DIInterface $di)
    {
        parent::__construct($di);
        $this->form->create(
            [
                "id" => __CLASS__,
                "use_fieldset" => false,
            ],
            [
                "title" => [
                    "type" => "text",
                    "label" => "Titel",
                    "validation" => ["not_empty"],
                ],
                        
                "author" => [
                    "type" => "text",
                    "label" => "Författare",
                    "validation" => ["not_empty"],
                ],

                "isbn" => [
                    "type" => "text",
                    "label" => "ISBN",
                    "validation" => ["not_empty"],
                ],

                "image" => [
                    "type" => "text",
                    "label" => "Bildlänk",
                    "validation" => ["not_empty"],
                ],

                "submit" => [
                    "type" => "submit",
                    "value" => "Lägg till",
                    "callback" => [$this, "callbackSubmit"],
                    "class" => "btn"
                ],
            ]
        );
    }



    /**
     * Callback for submit-button which should return true if it could
     * carry out its work and false if something failed.
     *
     * @return boolean true if okey, false if something went wrong.
     */
    public function callbackSubmit()
    {
        $book = new Book();
        $book->setDb($this->di->get("db"));
        $book->title    = $this->form->value("title");
        $book->author   = $this->form->value("author");
        $book->isbn     = $this->form->value("isbn");
        $book->image    = $this->form->value("image");
        $book->save();
        $this->di->get("response")->redirect($this->di->get("url")->create("book"));
    }
}
