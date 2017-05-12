window.onload = function () {
    document.querySelector(".menu-icon").onclick = function(){
        document.querySelector(".menu").classList.toggle('_show');
    }
}
function Label(labels) {
    this.labels = labels;
}

Label.prototype.getById = function (labelId) {
    for(var i=0; i<this.labels.length; i++){
        if(this.labels[i].id == labelId){
            var label = this.labels[i].label;
            return label;
        }
    }
}

function List (labels){
    this.label = new Label (labels);
    this.posts = [];

    this.formAdd = document.querySelector('.create-post-form');

    var _self = this;

    document.getElementById('create-button').onclick = function(){
        document.getElementById('create-post').classList.toggle('_hidden');
    };

    _self.formAdd.onsubmit = function(e){
        e.preventDefault();
        var itemData={
            label: _self.formAdd.newlabel.value,
            title: _self.formAdd.newtitle.value,
            content: _self.formAdd.newcontent.value
        };

        _self.formAdd.reset();

        $.ajax({
            url: '/main/add',
            type : 'POST',
            dataType:'json',
            data : itemData,
            success: function (result) {
                if(result.error){
                    alert(result.message);
                }else {
                    alert(result.message);
                    itemData.id = result.data.id;
                    itemData.label = _self.label.getById(itemData.label);
                    _self.add(itemData);

                }
            }
        });
    }
}

List.prototype.add = function(itemData){
    var post = new Item(itemData);
    this.posts.push(post);

}

function Item(itemData){
    this.label = itemData.label;
    this.title = itemData.title;
    this.content = itemData.content;
    this.id = itemData.id;

    this.post = '<div class="visible _show"><div class="user-post"><div class="user-post__picture"><a href=""><img src="application/templates/pictures/minimo_34.jpg"></a></div><form class="edit-form"><div class="user-post__head"><div class="user-post__label">'+this.label+'</div><div class="user-post__title">'+this.title+'</div><div class="user-post__content">'+this.content+'</div><div class="post-operations"><i class="glyphicon glyphicon-edit button-edit" title="edit"></i><i class="glyphicon glyphicon-trash button-delete" title="delete"></i></div></div></form></div></div>';
    this.editForm = '<div class="user-post-form _hidden"><div class="user-post__picture"><a href=""><img src="application/templates/pictures/minimo_34.jpg"></a></div><form class="form-edit"><input type="text" name="editlabel" class="editlabel input-decoration" value="'+this.label+'"><input type="text" name="edittitle" class="edittitle input-decoration" value="'+this.title+'"><textarea type="text" name="editcontent" class="editcontent input-decoration">'+this.content+'</textarea><br><button type="submit" class="button-decoration edit-form__button"><i class="glyphicon glyphicon-ok"></i></button><button class="cancel button-decoration"><i class="glyphicon glyphicon-remove"></i></button></form></div>'
    var editablePost = this.post+this.editForm;

    var userPosts = document.querySelector('.user-posts');
    this.newPost =  document.createElement('div');
    this.newPost.className = 'col-sm-6';
    this.newPost.innerHTML = editablePost;
    userPosts.appendChild(this.newPost);

    this.formEdit = this.newPost.querySelector('.form-edit');

    var _self = this;

    this.newPost.querySelector('.button-edit').addEventListener('click', function(){
        _self.show();
        _self.hidden();
    });

    this.newPost.querySelector('.form-edit').onsubmit = function(e){
        e.preventDefault();
        var itemData={
            id: _self.id,
            label: _self.formEdit.editlabel.value,
            title: _self.formEdit.edittitle.value,
            content: _self.formEdit.editcontent.value
		};

        $.ajax({
            url: '/main/edit',
            type : 'POST',
            dataType:'json',
            data : itemData,
            success: function (data) {
                if(data.error){
                    alert(data.message);
                }else{
                    alert(data.message);
                    _self.edit(itemData);
                    _self.show();
                    _self.hidden();
                }

            }
        });

    }

    this.newPost.querySelector('.cancel').onclick = function(){
        _self.show();
        _self.hidden();
    };

    this.newPost.querySelector('.button-delete').addEventListener('click', function(){
        if(confirm("Are you sure you want to delete this?")){
            $.ajax({
                url: '/main/delete',
                type : 'POST',
                dataType:'json',
                data : {id: _self.id},
                success: function (data) {
                    if(data.error){
                        alert(data.message);
                    }else{
                        alert(data.message);
                        _self.delete();
                    }

                }
            });
        }
    });

    this.show = function(){
        _self.newPost.querySelector('.visible').classList.toggle('_show');
    }

    this.hidden = function(){
        _self.newPost.querySelector('.user-post-form').classList.toggle('_hidden');
    }


    document.getElementById('close').onclick = function(e){
        e.preventDefault()
        document.getElementById('create-post').classList.toggle('_hidden');
    };
}

Item.prototype.delete = function(){
    this.newPost.parentNode.removeChild(this.newPost);
}

Item.prototype.edit = function(ItemData){
    this.newPost.querySelector('.user-post__label').innerHTML = ItemData.label;
    this.newPost.querySelector('.user-post__title').innerHTML = ItemData.title;
    this.newPost.querySelector('.user-post__content').innerHTML = ItemData.content;

}
	


