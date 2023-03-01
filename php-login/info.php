<?php
include_once 'header.php';
?>
<link rel="stylesheet" href="css/comment.css">
<div class='double-background'>

    <section class='comment-form'>
        <div class='info-container'>

<?php

if (isset($_SESSION["useruid"])) {
    echo"<form action='includes/forumlist.inc.php' method='post'>
    <h1>User manual</h1>
    <p>
    
In the given software, the user can familiarize himself with the game (an advertisement is displayed on the website), download the game, register and log in, view patchnotes, and also view the forum, create (change/delete your own) question and comment/answer them.
    </p>

    <h2>
    Downloading
    </h2>

    <p>
    The main page of the website will have an advertisement of the game to interest the user and if he likes it, he can download it by clicking the “Download” button.
    </p>
    <img src='https://cdn.discordapp.com/attachments/942790315209789441/1080532038932762724/download.png'>

    <p> </p>

    <h2>Registering and logging in</h2>
    <p>To view the forum, the user does not need to register and log in, but if he wants to write, change or delete something, he needs to register and log in.</p>
    <img src='https://cdn.discordapp.com/attachments/942790315209789441/1080532039176040508/login.png'>

    <p>In order to log in, the user needs to fill in the form with the required input data, if all the conditions are met correctly (name, username, password, email), then the user will have the opportunity to log in with the previously written data (username, password).</p>
    <img src='https://cdn.discordapp.com/attachments/942790315209789441/1080532037615755314/loginorsignup.png'>
    <p> </p>

    <h2>Patchnotes</h2>
    <p>The user only has the right to view this page</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080533102025253027/pc.png'>
    <p> </p>

    <h2>Forum</h2>
    <p>Forum consists of 'question' sections and 'answer' sections. Question and answer are connected by id, for example, we have 2 questions, but the answer will be different, because they are combined with other ids.*</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080532037934526544/forum.png'>
    <p> </p>

    <h2>Question & comment creation</h2>
    <p>A logged in user has direct access to create a question or comment. To create it, you need to fill out the form with your question/comment name and text</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080534996500090970/addaddcomment.png'>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080534997062135899/addcomment.png'>
    <p> </p>

    <h2> Question & comment deletion</h2>
    <p>A logged-in user has the right to delete his questions and comments by pressing the 'Delete' button, but if the user did not want to delete, there is a special window with confirmation, if the user does not want to delete it, press the 'No' button, if he wants - 'Yes'</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080535884434256022/deletecomment.png'>

    <p> </p>
    <h2>Changing question & comment</h2>
    
    <p>A logged-in user has the right to change his questions and comments by pressing the 'Update' button, then a change page appears where the user can change his question/answer data (name and text). By repeatedly pressing the 'Update' button, the data of the question or comment is changed</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080536156128673852/updatecomment1.png'>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080534997364113478/updatecomment.png'>
    </form>";
}
else if (isset($_SESSION["adminN"])) {
    echo"<form action='includes/forumlist.inc.php' method='post'>
    <h1>Admin manual</h1>
    <p>The site has 3 roles, unregistered user, registered user and admin. The admin has other rights: download the game by logging in, view, create (change/delete) patchnotes, as well as view the forum, create (change your/delete) questions and comment/answer them</p>
    <p> </p>

    <h2>Downloading</h2>
    <p>The main page of the website will have an advertisement of the game to interest the user and if he likes it, he can download it by clicking the “Download” button.</p>
    <p> </p>

    <h2>Logging in</h2>
    <p>There is no registration for the admin
    In order to log in, the admin needs to fill in the form with the required input data, if all the conditions are met correctly (name, username, password, email), then the user will have the opportunity to log in with the previously written data (username, password).</p>
    <p> </p>

    <h2>Patchnotes</h2>
    <p>The admin has the right to create, modify and delete 'changes' about the game for users to play with
    *creating, deleting and changing the system is the same as with comments*</p>
    <p> </p>

    <h2>Question & comment creation</h2>
    <p>The admin has the right to create a question or comment. To create it, you need to fill out the form with your question/comment name and text</p>
    <p> </p>

    <h2>Question & comment deletion</h2>
    <p>The admin has the right to delete his own and other users' questions and comments by pressing the 'Delete' button, but if the admin does not want to delete, there is a special window with confirmation, if the admin does not want to delete it, press the 'No' button, if he wants to - 'Yes' '</p>
    <p> </p>

    <h2>Changing question & comment</h2>
    <p>The admin has the right to change his questions and comments by pressing the 'Update' button, then the change page appears, where the admin can change the data of his questions/answers (name and text). By repeatedly pressing the 'Update' button, the data of the question or comment is changed</p>
    <p> </p>

    </form>";
}
else{
    echo"<form action='includes/forumlist.inc.php' method='post'>
    <h1>User manual</h1>
    <p>
    
In the given software, the user can familiarize himself with the game (an advertisement is displayed on the website), download the game, register and log in, view patchnotes, and also view the forum, create (change/delete your own) question and comment/answer them.
    </p>

    <h2>
    Downloading
    </h2>

    <p>
    The main page of the website will have an advertisement of the game to interest the user and if he likes it, he can download it by clicking the “Download” button.
    </p>
    <img src='https://cdn.discordapp.com/attachments/942790315209789441/1080532038932762724/download.png'>

    <p> </p>

    <h2>Registering and logging in</h2>
    <p>To view the forum, the user does not need to register and log in, but if he wants to write, change or delete something, he needs to register and log in.</p>
    <img src='https://cdn.discordapp.com/attachments/942790315209789441/1080532039176040508/login.png'>

    <p>In order to log in, the user needs to fill in the form with the required input data, if all the conditions are met correctly (name, username, password, email), then the user will have the opportunity to log in with the previously written data (username, password).</p>
    <img src='https://cdn.discordapp.com/attachments/942790315209789441/1080532037615755314/loginorsignup.png'>
    <p> </p>

    <h2>Patchnotes</h2>
    <p>The user only has the right to view this page</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080533102025253027/pc.png'>
    <p> </p>

    <h2>Forum</h2>
    <p>Forum consists of 'question' sections and 'answer' sections. Question and answer are connected by id, for example, we have 2 questions, but the answer will be different, because they are combined with other ids.*</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080532037934526544/forum.png'>
    <p> </p>

    <h2>Question & comment creation</h2>
    <p>A logged in user has direct access to create a question or comment. To create it, you need to fill out the form with your question/comment name and text</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080534996500090970/addaddcomment.png'>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080534997062135899/addcomment.png'>
    <p> </p>

    <h2> Question & comment deletion</h2>
    <p>A logged-in user has the right to delete his questions and comments by pressing the 'Delete' button, but if the user did not want to delete, there is a special window with confirmation, if the user does not want to delete it, press the 'No' button, if he wants - 'Yes'</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080535884434256022/deletecomment.png'>

    <p> </p>
    <h2>Changing question & comment</h2>
    
    <p>A logged-in user has the right to change his questions and comments by pressing the 'Update' button, then a change page appears where the user can change his question/answer data (name and text). By repeatedly pressing the 'Update' button, the data of the question or comment is changed</p>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080536156128673852/updatecomment1.png'>
    <img  src='https://cdn.discordapp.com/attachments/942790315209789441/1080534997364113478/updatecomment.png'>
    </form>";
}
?>      
   

            
        </div>       
    </section>
</div> 
<div id="footer">
        <div class="fcontent">
            <div class="column">
            <img src="https://cdn.discordapp.com/attachments/757590961839669339/1062822979240726719/kdmk.png" alt="LogoRVT">
                <p>
                    <strong>KMDK</strong>
                    Is a Latvian workers cooperative based in RVT college.
                </p>
                <p>
                    We've been making games since 2021 and we're going to keep on upgrading our games on PC.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
