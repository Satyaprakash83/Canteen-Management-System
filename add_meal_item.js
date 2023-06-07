const container = document.getElementById('container');
const addMeal = document.getElementById('addMeal');

const foodItem = document.querySelectorAll('#container .food-item');



  foodItem.forEach(div => {
    
      foodItem.addEventListener('click' , function(){
          container.removeChild(div);
          
          addMeal.appendChild(div);
        });
    });  

