

$( document ).ready(function() {

    // ! S24 Bottom Nav [user area] show on scroll


    $('.search-toggler').click(function() {
        $(this).fadeOut(0);
        $('.nav__search').addClass('show');
    });

    $('.nav__search .input-group-append').click(function() {
        $('.search-toggler').fadeIn(1000);
        $('.nav__search').removeClass('show');
    });


     $(".mix").hover(function(){
         $(".hoverlist").show(100);
         });

      $(".hoverlist").mouseleave(function(){
         $(".hoverlist").hide(400);
         });
 /*
    $(function() {
        $('.mix, .hoverlist').hover(function() {
            $('.hoverlist').toggle();
        });
        });
  */

// ! Top Nav Expandable Search Box
 var searchField = $('.search');
var searchInput = $('.search-input');
var searchIcon = $('.search-icon');
var cancelIcon = $('.search-cancel-icon');
var searchOutput = $('.search-output');
var searchForm = $('.search-form');

function openSearch() {
  searchField.addClass('search-open');
  searchInput.removeClass("hide").focus();
  cancelIcon.removeClass("hide");
}
function closeSearch() {
  searchField.removeClass('search-open');
  searchInput.addClass("hide");
  cancelIcon.addClass("hide");
}
function doSearch() {
  searchOutput.text(searchInput.val());
  searchOutput.removeClass("hide");
}
searchIcon.on('click', function() {
  if(!searchField.hasClass('search-open')) {
    openSearch();
  } else {
    doSearch();
  }
});
searchInput.on('focusout', function() {
  if(searchInput.val().length === 0) {
    closeSearch();
  }
});
cancelIcon.on('click', function() {
  if(searchInput.val().length !== 0) {
    searchInput.val("").focus();
    searchOutput.text('');
  } else {
    closeSearch();
  }
});
searchForm.on('submit', function(e) {
  e.preventDefault();
  doSearch();
});


// ! Bottom Nav Expandable Search Box


 var bottomSearchField = $('.bottom-search');
var bottomSearchInput = $('.bottom-search-input');
var bottomSearchIcon = $('.bottom-search-icon');
var bottomSancelIcon = $('.bottom-search-cancel-icon');
var bottomSearchOutput = $('.bottom-search-output');
var bottomSearchForm = $('.bottom-search-form');

function bottomOpenSearch() {
  bottomSearchField.addClass('bottom-search-open');
  bottomSearchInput.removeClass("bottom-hide").focus();
  bottomSancelIcon.removeClass("bottom-hide");
}
function bottomCloseSearch() {
  bottomSearchField.removeClass('bottom-search-open');
  bottomSearchInput.addClass("bottom-hide");
  bottomSancelIcon.addClass("bottom-hide");
}
function bottomDoSearch() {
  bottomSearchOutput.text(bottomSearchInput.val());
  bottomSearchOutput.removeClass("hide");
}
bottomSearchIcon.on('click', function() {
  if(!bottomSearchField.hasClass('bottom-search-open')) {
    bottomOpenSearch();
  } else {
    bottomDoSearch();
  }
});
bottomSearchInput.on('focusout', function() {
  if(bottomSearchInput.val().length === 0) {
    bottomCloseSearch();
  }
});
bottomSancelIcon.on('click', function() {
  if(bottomSearchInput.val().length !== 0) {
    bottomSearchInput.val("").focus();
    bottomSearchOutput.text('');
  } else {
    bottomCloseSearch();
  }
});
bottomSearchForm.on('submit', function(e) {
  e.preventDefault();
  bottomDoSearch();
});});



