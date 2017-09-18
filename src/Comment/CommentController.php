<?php

namespace Talm\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
* A controller for the comment module.
*/
class CommentController implements InjectionAwareInterface
{
    use InjectionAwareTrait;
    
    
    /**
     * Reset all comments/session.
     *
     * @return void
     */
    public function getReset()
    {
        $this->di->get("session")->destroy();
        $this->di->get("response")->redirect($this->di->get("url")->create("comments"));
    }


    /**
     * Start the session
     *
     * @return void
     */
    public function anyStart()
    {
        $this->di->get("session")->start();
    }


    /**
     * Get all comments
     *
     * @return void
     */
    public function getComments()
    {
        // Title of page
        $title = "Comments";
        
        // Get all comments
        $comments = $this->di->get("comment")->getComments();
        
        // Parse all comments for markdown
        foreach ($comments as $key => $comment) {
            $comments[$key]["text"] = $this->di->get("textfilter")->parse($comment["text"], ["markdown"])->text;
        }

        $this->di->get("view")->add("comment/comments", ["comments" => $comments]);
        $this->di->get("pageRender")->renderPage(["title" => $title]);
    }


    /**
     * Post a comment
     *
     * @return void
     */
    public function postComment()
    {
        $comment = [];
        $comment["email"] = htmlspecialchars($this->di->get("request")->getPost("email"));
        $comment["text"] = htmlspecialchars($this->di->get("request")->getPost("text"));
        
        // Add comment to all comments
        $this->di->get("comment")->addComment($comment);
        
        $this->di->get("response")->redirect("comments");
    }


    /**
     * Get a singel comment.
     *
     * @param int $id id of comment to get
     * @return void
     */
    public function getComment($id)
    {
        // Get single comment
        $comment = $this->di->get("comment")->getComment($id);
        
        // Parse comment for markdown
        $comment["text"] = $this->di->get("textfilter")->parse($comment["text"], ["markdown"])->text;
        
        $title = "Comment # " . $id;

        // Add to view and render
        $this->di->get("view")->add("comment/comment", ["comment" => $comment]);
        $this->di->get("pageRender")->renderPage(["title" => $title]);
    }



    public function editComment($id)
    {
        $comment = $this->di->get("comment")->getComment($id);

        $title = "Edit comment";

        $this->di->get("view")->add("comment/edit", ["comment" => $comment]);
        $this->di->get("pageRender")->renderPage(["title" => $title]);
    }


    public function upsertComment()
    {
        $comment = [];
        $comment["id"] = htmlspecialchars($this->di->get("request")->getPost("id"));
        $comment["email"] = htmlspecialchars($this->di->get("request")->getPost("email"));
        $comment["text"] = htmlspecialchars($this->di->get("request")->getPost("text"));

        $this->di->get("comment")->upsertComment($comment);
        $this->di->get("response")->redirect($this->di->get("url")->create("comments"));
    }


    /**
     * Delete a comment.
     *
     * @param int $id id of comment to delete
     * @return void
     */
    public function deleteComment($id)
    {
        $this->di->get("comment")->deleteComment($id);
        $this->di->get("response")->redirect($this->di->get("url")->create("comments"));
    }
}
