{{-- <button class="item-add-comment" type="button" data-toggle="modal" data-target="#item-add-comment-modal">
  <i class="la la-comment-alt"></i> تعليق
</button> --}}

<div class="item-actions d-flex  px-3">
  <div class="container py-2 position-relative">
    <div class="item-actions__icons h-100 d-flex justify-content-between align-items-center">
      <a href="#" class="item-actions__likes text-center">
        <img src="/img/mobile/like-fixed.png" alt="">
        <span class="item-actions__likes--word">أعجبني</span>
        <br>
        <span class="item-actions__likes--number">2,000</span>
      </a>
      <a href="#" class="item-actions__comments text-center" data-toggle="modal" data-target="#item-add-comment-modal">
        <img src="/img/mobile/comment-fixed.png" alt="">
        <span class="item-actions__comments--word">تعليق</span>
        <br>
        <span class="item-actions__comments--number">2,000</span>
      </a>
      <a href="#" class="item-actions__share text-center">
        <img src="/img/mobile/share-fixed.png" class="item-actions__share__share-img " alt="">
        <span class="item-actions__share--word">مشاركة</span>
        <br>
        <span class="item-actions__share--number">2,000</span>
      </a>
    </div>
    <div class="share-list mr-auto">
      <a href="#" class="share-list__telegram">
        telegram 
        <img src="/img/mobile/social/telegram.png" alt="">
      </>
      <a href="#" class="share-list__whatsapp">
        whatsapp 
        <img src="/img/mobile/social/whatsapp.png" alt="">
      </a>
      <a href="#" class="share-list__twitter">
        twitter
         <img src="/img/mobile/social/twitter.png" alt="">
      </a>
      <a href="#" class="share-list__facebook">
        facebook
         <img src="/img/mobile/social/facebook.png" alt="">
      </a>
    </div>
  </div>
</div>


{{-- <div class="item-actions d-flex fixed-bottom justify-content-between">
  <div class="item-actions__likes">
    <img src="/img/mobile/like-fixed.png" alt="">
    <span>أعجبني</span>
    <br>
    <span>2,000</span>
  </div>
  <div class="item-actions__share">
    <img src="/img/mobile/like-fixed.png" alt="">
    <span>أعجبني</span>
    <br>
    <span>2,000</span>
  </div>
  <div class="item-actions__comments">
    <img src="/img/mobile/like-fixed.png" alt="">
    <span>أعجبني</span>
    <br>
    <span>2,000</span>
  </div>
</div> --}}
<div class="item-add-comment-modal modal animated fadeIn" id="item-add-comment-modal" tabindex="-1"
     role="dialog" aria-labelledby="item-add-comment-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>آضافة تعليق</h3>
        <div class="modal-header--times">
          <a data-dismiss="modal"><i class="la la-times"></i></a>
        </div>
      </div>
      <div class="modal-body">
        <div class="modal-body__comment-area">
          <img src="/img/mobile/avatar.png" alt="">
          <textarea name="" id="add-comment" rows="10" class="form-control"
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
  $('.item-add-comment-modal').on('shown.bs.modal', function () {
    $('#add-comment').trigger('focus')
  })

</script>
<script>
  $(".item-actions__share").click(function(){
    $(".share-list").fadeToggle(200);
    $(".item-actions__share__share-img").toggleClass('clicked');
  /*  if ($('.item-actions__share__share-img').hasClass('clicked')) {
      $('.item-actions__share__share-img').attr("src","/img/mobile/social/telegram.png");
    } else{
        $('.item-actions__share__share-img').attr("src","/img/mobile/share-fixed.png");
    }
    */
  })
</script>

@endpush