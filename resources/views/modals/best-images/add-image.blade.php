<!-- Modal -->
<div class="modal fade" id="add-image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="{{route('best-images.store')}}" enctype="multipart/form-data">
                    @csrf


                    <div class="">

                        <div class="file-upload">
                            <div class="image-upload-wrap">
                                <input id="image" name="image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" required/>
                                <div class="drag-text">
                                    <i class="fa-solid fa-image"></i>
                                    <h3>ارفع صورتك</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">حذف الصورة </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($errors->messages() as $error)
                        @foreach($error as $e)
                            <strong>{{$e}}</strong>
                        @endforeach
                    @endforeach

                    <div class="mt-3">
                        <button type="submit" class="btn btn-outline-info">اضافة</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
