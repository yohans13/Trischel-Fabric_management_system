class Notification{


  cartsuccess(){
    new Noty({
      type:'success',
      layout:'topRight',
      text: 'Successfully add to cart!',
      timeout:1000,
  }).show();
  }


  success(){
    new Noty({
      type:'success',
      layout:'topRight',
      text: 'Successfully Done!',
      timeout:1000,
  }).show();
  }

  alert(){
    new Noty({
      type:'alert',
      layout:'topRight',
      text: 'Are you sure!',
      timeout:1000,
  }).show();
  }

  error(){
    new Noty({
      type:'alert',
      layout:'topRight',
      text: 'Something went wrong!',
      timeout:1000,
  }).show();
  }

  warning(){
    new Noty({
      type:'warning',
      layout:'topRight',
      text: 'Opps Wrong!',
      timeout:1000,
  }).show();
  }

  image_validation(){
    new Noty({
      type:'error',
      layout:'topRight',
      text: 'Upload Image Less Than 1mb',
      timeout:1000,
  }).show();
  }

  Cart_dalete(){
    new Noty({
      type:'success',
      layout:'topRight',
      text: 'Successfully Deleted',
      timeout:1000,
  }).show();
  }


   

}

export default Notification = new Notification()