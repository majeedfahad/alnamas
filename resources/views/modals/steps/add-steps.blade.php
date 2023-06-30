<!-- Modal -->
<div class="modal fade" id="add-steps" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="{{route('steps.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex align-items-center">
                        <label for="count" class="w-75">عدد خطواتك اليوم </label>
                        <input id="count" class=" form-control text-right p-2" type="number" name="count" required placeholder="7500" />
                    </div>

                    <div class="">

                        <div class="file-upload">
                            <div class="image-upload-wrap">
                                <input id="image" name="image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*"/>
                                <div class="drag-text">
                                    <i class="fa-solid fa-image"></i>
                                    <h3>صورة التحقق من المصداقية والموثوقية والأمانة والعدالة</h3>
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
        </div>
    </div>
</div>
