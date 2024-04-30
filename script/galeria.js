var filter = document.querySelectorAll('.filter-item');
var imageItem = document.querySelectorAll('.image-gallary li');

filter.forEach(function(value,index){
    value.addEventListener("click", function(){
        elementData = value.dataset.imageType;
        showImage(elementData);
        showActiveTab(index);
    })
})

function showImage(n){
    for(var i=0;i<imageItem.length;i++){
        var arr1 =  imageItem[i].dataset.imageType.split(',');
        (arr1.includes(n))?imageItem[i].classList.remove('hide'):
        imageItem[i].classList.add('hide');
        arr1 = [];
    }
}

function showActiveTab(m){
    for(var j=0;j<filter.length;j++){
        (j==m)?filter[m].classList.add('active'):
        filter[j].classList.remove('active');            
    }
}