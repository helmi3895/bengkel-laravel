<form action="{{ route ('posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    Title:
    </br><input type="text" name="title"></br>
    Content:
    </br><textarea name="content" id="" cols="30" rows="10"></textarea></br>
    Image:
    </br><input type="file" name="image"></br>
    <button type="submit">Save</button>
</form>