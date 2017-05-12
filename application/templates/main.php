<?include("header.php");?>
		<div class="row main-content">
			<div class="main-post">
				<div class="label">
                    photodiary
				</div>
				<h1>The perfect weekend getaway</h1>
				<div class="main-post__content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</div>
				<div class="label">
                    leave a comment
                </div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="create-button" id="create-button">
						<i class="glyphicon glyphicon-pencil">
                            write an aticle
                        </i>
					</div>
				</div>
				<div class="create-post _hidden" id="create-post">
					<form class="create-post-form">
                        <select name="newlabel" class="decoration">
                            <?foreach ($label as $label):?>
                                <option value="<?=$label["id"]?>"><?=$label["label"]?></option>
                            <?endforeach;?>
                        </select><br>
						<input type="text" name="newtitle" id="new-title" placeholder="title" class="decoration">
						<textarea type="text" name="newcontent" id="new-content" placeholder="content" class="decoration"></textarea><br>
						<button type="submit" id="create" title="create" class="button-decoration"><i class="glyphicon glyphicon-send"></i></button>
						<button id="close" title="close" class="button-decoration"><i class="glyphicon glyphicon-remove" ></i></button>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="user-posts">
                    <!--     <script>
                        var posts = <?//=json_encode($posts)?>;
                        var articlesList = new List();
                        for(var i=0; i<posts.length; i++){
                            articlesList.add(posts[i]);
                        }
                    </script>-->
				</div>
			</div>
		</div>
	</div>
	<div class="row join-form ">
		<div class="container">
			<div class="join-form__heading">
                Sign up for our newsletter!
			</div>
			<div class="line">
				<form>
					<input type="text" name="user-mail" class="user-mail" placeholder="Enter a valid email address">
					<button type="submit" class="send"><i class="icon icon-send"></i></button>
				</form>
			</div>
		</div>
	</div>
    <script>
        $(document).ready(function(){
            var posts = <?=json_encode($posts)?>;
            var articlesList = new List(<?=json_encode($label)?>);
            posts.forEach(function(item){
                articlesList.add(item);
            });
        });
    </script>

<?include("footer.php");?>