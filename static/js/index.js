$(document).ready(function() {
  // 左邊導覽列的動畫
  if (location.search == '?page=propertyIM') {
    $('#propertyIMicon').removeAttr('fa-circle-o');
    $('#propertyIMicon').addClass('fa-circle');
    $('#propertyIM').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
    $('#propertyMenu').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
  } else if (location.search == '?page=mileage') {
    $('#mileage').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
  } else if (location.search == '?page=propertySort') {
    $('#propertySorticon').removeAttr('fa-circle-o');
    $('#propertySorticon').addClass('fa-circle');
    $('#propertySort').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
    $('#propertyMenu').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
  } else if (location.search == '?page=fix') {
    $('#fix').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
  } else if (location.search == '?page=change') {
    $('#change').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
  } else if (location.search == '?page=const') {
    $('#const').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
  } else if (location.search == '?page=setting') {
    $('#setting').css('background', '#636363').css('border-left-color', '#00C2C2').css('text-decoration', 'none').css('color', '#fff');
  }
  // 每個頁面的新建按鈕
  $(document).on('click', '.btn-new', function() {
    $('.table-list').hide();
    $('.new-page').show();
    $('.new-page input').val('');
    $('.new-page input').removeAttr('disabled');
    $('.new-page textarea').removeAttr('disabled');
    $('#new-submit').show();
  });
  // 每個頁面的返回按鈕
  $('#back').on('click', function() {
    $('.new-page').hide();
    $('.table-list').show();
  });
  // setting的返回按鈕
  $('.back').on('click', function() {
    $('.edit-page').hide();
    $('.table-list').show();
  });
  // 每個頁面的詳情按鈕
  $(document).on('click', '.btn-info', function() {
    $('.table-list').hide();
    $('#new-submit').hide();
    $('.new-page').show();
    $('.new-page input').prop('readonly', 'readonly');
    $('.new-page textarea').prop('readonly', 'readonly');
    if (location.search == '?page=mileage') {
      dataGetMileageInfo = {
        mi_id: $(this).parent().children(0),
      }
      $.ajax({
        type: "POST",
        url: "url", //填寫php的網址
        data: dataGetMileageInfo,
        success: function (response) {
        }
      });
    }
  });
  // 每個頁面的編輯按鈕
  $(document).on('click', '.btn-warning', function() {
    $('.table-list').hide();
    if (location.search == '?page=setting') {
      $('.edit-page').show();
    } else {
      $('.new-page').show();
      $('#new-submit').show();
      $('.new-page input').removeAttr('disabled');
      $('.new-page textarea').removeAttr('disabled');
    }
    if (location.search == '?page=mileage') {
      $('#riverName').val($(this).parent().prev().prev().prev().prev().prev().prev().prev().html());
      $('#embank').val($(this).parent().prev().prev().prev().prev().prev().prev().html());
      $('#lat').val($(this).parent().prev().prev().prev().prev().prev().html());
      $('#lng').val($(this).parent().prev().prev().prev().prev().html());
      $('#loc').val($(this).parent().prev().prev().prev().html());
      $('#userName').val($(this).parent().prev().prev().html());
      Time = $(this).parent().prev().text();
      Time = Time.split(':');
      start = Time[1].split('更');
      $('#startTime').val(start[0]);
      $('#lastTime').val(Time[2]);
    } else if (location.search == '?page=propertySort') {
      $('#num').val($(this).parent().prev().prev().text());
      $('#propertyName').val($(this).parent().prev().text());
    }
  });
});
// setting的checkbox
$('input[type=\'checkbox\']').change(function(e) {
  if ($(this).prop('id') == 'mileage') {
    if ($(this).prop('checked') == true) {
      $(this).parent().parent().next().show();
    } else {
      $(this).parent().parent().next().hide();
    }
  } else if ($(this).prop('id') == 'property') {
    if ($(this).prop('checked') == true) {
      $(this).parent().parent().next().show();
    } else {
      $(this).parent().parent().next().hide();
    }
  } else if ($(this).prop('id') == 'fix') {
    if ($(this).prop('checked') == true) {
      $(this).parent().parent().next().show();
    } else {
      $(this).parent().parent().next().hide();
    }
  } else if ($(this).prop('id') == 'change') {
    if ($(this).prop('checked') == true) {
      $(this).parent().parent().next().show();
    } else {
      $(this).parent().parent().next().hide();
    }
  } else if ($(this).prop('id') == 'const') {
    if ($(this).prop('checked') == true) {
      $(this).parent().parent().next().show();
    } else {
      $(this).parent().parent().next().hide();
    }
  }
});

$(document).on('click', '#new-submit', function() {
  $.ajax({
    type: 'POST',
    url: 'ajax.php?select_op=asd',
    data: 'data',
    success: function(response) {
      console.log(response);
    },
  });
});
// 全部的資料表都是用這個
$('#dataTable').DataTable({
  language: {
    'sProcessing': '處理中...',
    'sLengthMenu': '顯示 _MENU_ 項结果',
    'sZeroRecords': '找無相關結果',
    'sInfo': '顯示第 _START_ 至 _END_ 項结果，共 _TOTAL_ 項',
    'sInfoEmpty': '顯示第 0 至 0 項结果，共 0 項',
    'sInfoFiltered': '(由 _MAX_ 項結果過濾)',
    'sInfoPostFix': '',
    'sSearch': '搜尋:',
    'sUrl': '',
    'sEmptyTable': '表中無數據',
    'sLoadingRecords': '載入中...',
    'sInfoThousands': ',',
    'oPaginate': {
      'sFirst': '首頁',
      'sPrevious': '上一頁',
      'sNext': '下一頁',
      'sLast': '最後一頁',
    },
    'oAria': {
      'sSortAscending': ': 以升冪排列此列',
      'sSortDescending': ': 以降冪排列此列',
    },
  },
});
