$('.question').css({
    "margin": "30px auto",
    "width": "60%",
    "background": "rgb(158, 234, 224)",
    "border": "4px solid #000",
    "padding": "30px",
    "display": "flex",
    "justify-content": "space-between",
    "align-items": "center"
});


$('input').css({
    "margin": "5px 0"
})


$('h2').css({
    "margin": "5px 0"
})

let infoQ

$('a').hover(function(){
    // alert('tt')
    infoQ = $("input[name='q1']:checked").val();
    alert(infoQ)
})




