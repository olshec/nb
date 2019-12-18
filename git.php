
<!DOCTYPE html>
<html>

<head>
    <title>Knowledge base</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'navigator.php';?>

<div class="container">
    <a href="#git-config" class="btn btn-primary" data-toggle="collapse">git-config</a>
    <div id="git-config" class="collapse">
        <pre>

        ~/.gitconfig:
        [user]
                email = olshec@gmail.com
                name = olshec
        [credential]
                helper = cache --timeout 7200

        [alias]
                co = checkout
                ci = commit
                st = status
                br = branch
                hist = log --pretty=format:\"%h %ad | %s%d [%an]\" --graph --date=short
                type = cat-file -t
        dump = cat-file -p 
        </pre>
    </div>
</div>
<br>

<div class="container">
  <a href="#git-utilites" class="btn btn-primary" data-toggle="collapse">git-utilites</a>
  <div id="git-utilites" class="collapse">
    <pre>
    
       Utilites: gitk, gitg
    </pre>
  </div>
</div>
<br>


<div class="container">
  <a href="#git-commands" class="btn btn-primary" data-toggle="collapse">git-commands</a>
  <div id="git-commands" class="collapse">
    <pre>
    
       git reflog - find lost commits
    </pre>
  </div>
</div>

    
</body>

</html>








