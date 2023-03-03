let del_btns = document.getElementsByClassName("delete");
    for(let del_btn of del_btns){
    del_btn.addEventListener("click", ()=>{
      let product_id = del_btn.dataset.delete
      console.log(product_id)

      fetch('delete_product.php?product_id=' + encodeURIComponent(product_id), {
        method:"GET"
      })
      .then(res=> res.json())
      .then(data => {
        if(data.success){
          alert("Deleted Successfully")
          location.reload()
        }else{
          alert("Could not delete")
        }
      }).catch(err=> alert(err))
    })
  }

  let del_categories = document.getElementsByClassName("delete_cat")

  for(let del of del_categories){
    del.addEventListener("click", ()=>{
        let category_id = del.dataset.delete

      fetch('delete_category.php?category_id=' + encodeURIComponent(category_id), {
        method:"GET"
      })
      .then(res=> res.json())
      .then(data => {
        if(data.success){
          alert("Deleted Successfully")
          location.reload()
        }else{
          alert("Could not delete")
        }
      }).catch(err=> alert(err))
    })

  }

  let tags = document.getElementsByClassName("tm-product-name")
  for (let tag of tags){
    tag.addEventListener("click", ()=>{
      product_id = tag.dataset.id;
      window.location.href = 'edit-product.php?product_id=' +encodeURIComponent(product_id);
    })
  }