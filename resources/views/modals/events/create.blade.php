<!-- Modal -->
<div class="custom-modal position-fixed create-event"
     style="inset: 0 0 0 0; ; z-index: 99999">
    <div class="overlay position-fixed" style="inset: 0 0 0 0; background-color: rgba(0,0,0,.2) ; z-index: 99999"></div>
    <div class="d-flex justify-content-center align-items-center " style="height: 100%;">
        <div class="bg-light p-4 rounded position-relative" style="z-index: 999999999">
            <p>إضافة فعالية</p>
            <div id="text-screen" class="screen">
                <input type="text" class="form-control" placeholder="اسم الفعالية">
                <label class="mt-2"> صورة الفعالية</label>
                <input id="image" type="file"
                       class="form-control @error('image') is-invalid @enderror" name="image"
                       required
                       accept="image/*">
                <button class="btn btn-dark submit-btn mt-2">حفظ</button>
            </div>

        </div>
    </div>
</div>
