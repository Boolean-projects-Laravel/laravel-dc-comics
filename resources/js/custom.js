let buttonDelete = document.querySelectorAll(".button_delete");

buttonDelete.forEach(function(button){
    button.addEventListener("click", function(){
        if(confirm('sicuro di voler cancellare questo Comic?')){
            alert('operazione completata')
        }
        else{
            event.preventDefault()
            alert('operazione annullata')
        }
    });
});