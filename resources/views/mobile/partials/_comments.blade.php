<div class="item__comments">
  <div class="item__comments__top d-flex justify-content-between mb-3 px-3">
    <span class="text-muted">التعليقات</span>
    <span><img src="/img/mobile/commentstop.svg" style="width: 18px; height: 19px;"></span>
  </div>

  <div class="item__comments__container px-3">
    <div class="item__comments__container__comment">
      <img width="60" src="/img/mobile/avatar.png" class="img-fluid rounded  ml-2"/>
      <div class="w-100">
        <div class="item__comments__container__comment__meta">
          <p class="mb-0"> Mohamed Ali </p>
          <span class="comments-text-muted">5 دقائق </span>
        </div>
        <p class="item__comments__container__comment__text">هذا النص هو مثال لنص
          يمكن ان يستبدل في نفس المساحة, لقد تم توليد هذا النص
          ذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة, لقد تم توليد هذا النص
          من مولد النص من مولد النص </p>
        <div
          class="item__comments__container__comment__actions comments-text-muted">
          <button class="btn btn-link comments-text-muted">
            <i class="fa fa-thumbs-o-up"></i> 4
          </button>
          <i class="fa fa-circle"></i>
          <button class="btn btn-link comments-text-muted" data-toggle="modal" data-target="#item-add-reply-modal">
            <i class="fa fa-reply"></i> إضافة رد
          </button>
          <i class="fa fa-circle"></i>
          <button class="btn btn-link comments-text-muted">
            تبليغ
          </button>
        </div>
        <div class="item__comments__container__comment__replies">
          <div class="item__comments__container__comment__replies__reply">
            <img width="60" src="/img/mobile/avatar.png"
                 class="img-fluid rounded  ml-2"/>
            <div class="w-100">
              <div
                class="item__comments__container__comment__replies__reply__meta">
                <p class="mb-0"> Mohamed Tarek </p>
                <span class="comments-text-muted"> 5
                  دقائق </span>
              </div>
              <p
                class="item__comments__container__comment__replies__reply__text">
                هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة, لقد تم
                توليد هذا النص
              </p>
              <div
                class="item__comments__container__comment__replies__reply__actions comments-text-muted">
                <button class="btn btn-link comments-text-muted">
                  <i class="fa fa-thumbs-o-up"></i> 4
                </button>
                <i class="fa fa-circle"></i>
                <button class="btn btn-link">
                  تبليغ
                </button>
              </div>
            </div>
          </div>
          <div class="item__comments__container__comment__replies__reply">
            <img width="60" src="/img/mobile/avatar.png"
                 class="img-fluid rounded  ml-2"/>
            <div class="w-100">
              <div
                class="item__comments__container__comment__replies__reply__meta">
                <p class="mb-0"> Mohamed Tarek </p>
                <span class="comments-text-muted"> 5
                  دقائق </span>
              </div>
              <p
                class="item__comments__container__comment__replies__reply__text">
                هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة, لقد تم
                توليد هذا النص
              </p>
              <div
                class="item__comments__container__comment__replies__reply__actions comments-text-muted">
                <button class="btn btn-link comments-text-muted">
                  <i class="fa fa-thumbs-o-up"></i> 4
                </button>
                <i class="fa fa-circle"></i>
                <button class="btn btn-link">
                  تبليغ
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="item__comments__container__more my-3">
    <button class="btn w-100 rounded">
      المزيد من التعليقات
      <img src="/img/mobile/speech-bubbles.png" style="width:14px; height:14px;" alt=""
           class="mr-1 mb-1">
    </button>
  </div>
</div>

<div class="item-add-reply-modal modal animated fadeIn" id="item-add-reply-modal" tabindex="-1" role="dialog"
aria-labelledby="item-add-reply-modal" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3>آضافة رد</h3>
            <div class="modal-header--times">
                <a data-dismiss="modal"><i class="la la-times"></i></a>
            </div>
        </div>
        <div class="modal-body">
            <div class="modal-body__comment">
                <img src="/img/mobile/avatar.png" class="modal-body__comment--img ml-2" />
                <span class="vertical-line"></span>
                <div class="w-100">
                    <div class="modal-body__comment__meta">
                        <p class="mb-0"> Mohamed Ali </p>
                        <span class="comments-text-muted">5 دقائق </span>
                    </div>
                    <p class="modal-body__comment__text">هذا النص هو مثال لنص
                        يمكن ان يستبدل في نفس المساحة, لقد تم توليد هذا النص
                        ذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة, لقد تم توليد هذا النص
                        من مولد النص من مولد النص </p>



                </div>
            </div>
            <div class="modal-body__reply-area">
                <div class="modal-body__reply-area--img">
                    <img src="/img/mobile/avatar.png" alt="">
                    <i class="fa fa-reply"></i>
                </div>
                <textarea name="" id="add-reply" rows="10" class="form-control"
                    placeholder="اكتب تعليقك هنا"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn submit-btn" type="button" data-dismiss="modal">اضافة التعليق</button>
        </div>
    </div>
</div>
</div>
@push('js')

<script>
  $('.item-add-reply-modal').on('shown.bs.modal', function () {
    $('#add-reply').trigger('focus')
  })

</script>
@endpush