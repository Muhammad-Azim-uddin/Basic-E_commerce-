$(document).ready(function () {
  // Toggle submenu and icon
  $('.shopCollapse').click(function () {
    let submenu = $(this).find('.shopOpen');
    let iconElement = $(this).find('iconify-icon');
    submenu.toggleClass('active');
    iconElement.attr(
      'icon',
      iconElement.attr('icon') === 'ep:arrow-down-bold'
        ? 'ep:arrow-right-bold'
        : 'ep:arrow-down-bold'
    );
  });
  // Mobile search box toggle
  $('.searchMob').click(function () {
    $('.searchBoxMobile').addClass('active');
    $('.bottomNavBar').addClass('d-none');
  });
  $('.closeBtnSearch').click(function () {
    $('.searchBoxMobile').removeClass('active');
    $('.bottomNavBar').removeClass('d-none');
  });
});
