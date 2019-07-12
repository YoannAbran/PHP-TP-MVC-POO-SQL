<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function listPosts()
{
    $postManager = new blogtest\model\PostManager ();
    $posts=$postManager->getPosts ();

    require('view/listpostview.php');
}

function Post()
{
    $postManager = new blogtest\model\PostManager ();
    $commentManager = new blogtest\model\CommentManager ();
    
    $post=$postManager->getPost($_GET['id']);
    $comments=$commentManager->getComments($_GET['id']);

    require('view/postview.php');
}
function addComment($postId,$author,$comment)
{
    
    $commentManager = new blogtest\model\CommentManager ();
    $affectedLines = $commentManager ->postComment($postId,$author,$comment);
    
    if($affectedLines === false)
    {
        throw new Exception('Impossible d\'ajouter le commentaire');
    }
    else  
    {
        header('Location: index.php?action=post&id=' . $postId);
    }

}

  function viewComment()
{
    $commentManager = new blogtest\model\CommentManager();
    $comment = $commentManager->getComments($_GET['id']);
    
  
    require('view/commentview.php');

function editComment($id, $comment,$postId)
{
    $commentManager = new blogtest\model\CommentManager();
    $newComment = $commentManager->updateComment($id, $comment,$postId);
    if ($newComment === false) 
    {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else 
    {
        header('Location: index.php?action=post&id=' . $postId);
    }
}
  }