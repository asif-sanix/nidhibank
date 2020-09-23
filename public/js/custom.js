function Button(button) {
    this.buttonOldHtml = button.innerHTML;
    this.process = function() {
        button.innerHTML = '<i class="fa fa-spinner fa-spin"></i>&nbsp;' + this.buttonOldHtml;
        button.disabled = true;
    }
    this.normal = function() {
        button.innerHTML = this.buttonOldHtml;
        button.disabled = false;
    }
}

clearErrors = function() {
        Array.from(document.getElementsByClassName('validate')).map(function(e, f) {
            e.innerHTML = '';
        });
        Array.from(document.getElementsByClassName('error')).map(function(e, f) {
            e.innerHTML = '';
        });
}
handleErrors = function(error, options={}) {
    var options = {
        element:options.element?options.element:'p',
        style:options.style,
        class:options.class?options.class:'text-danger'
    }
    if (!error)
        return;
    if (error.message && !error.errors && !error.class) {
        return toastr.error(error.message);
    }
    var element = '';
    Array.from(document.getElementsByClassName('validate')).map(function(e, f) {
        e.innerHTML = '';
    });
    Object.entries(error.errors).map(function(a, b, c) {
        var ele = document.querySelector('.validate.' + a[0]);
        if (ele) {
            a[1].map(function(e, f) {
                ele.innerHTML = e;
            });
        } else {
            element = document.createElement(options.element);
            element.setAttribute('class', 'validate '+options.class+' ' + a[0]);
            element.setAttribute('style', options.style);
            a[1].map(function(e, f) {
                var textnode = document.createTextNode(e);
                element.appendChild(textnode);
            });
            var input = document.querySelector('[name="' + a[0] + '"]');
            if (input)
                input.parentNode.insertBefore(element, input.nextSibling);
        }
    });
}









function getMemberSingle(element) {
  var id = element.val();
    $.ajax({
      type: "GET",
      url: "/admin/common/member/"+id,
      success: function(result) {

       var data = '<li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.name+'</span>Name</li> <li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.email+'</span>Email</li> <li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.mobile_no+'</span>Mobile No.</li><li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.address_1+'</span>Address</li><li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.state+' / '+result.data.district+'</span>State/City</li>'
       $('#memberDetails').html(data);
      },
      error: function(error) {
       console.log(error)
      }
    });
}


function schemeDetails(element) {
  var id = element.val();
    $.ajax({
      type: "GET",
      url: "/admin/common/scheme/"+id,
      success: function(result) {

       var data = '<li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.name+'</span>Scheme Name</li> <li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.interest_payout+'</span>Interest Payout</li> <li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.interest_rate+'</span>Interest Rate</li><li class="list-group-item"><span class="badge-default badge-pill float-right">'+result.data.minimum_balance+'</span>Minimum Balance</li>'
       $('#schemeDetails').html(data);
      },
      error: function(error) {
       console.log(error)
      }
    });
}