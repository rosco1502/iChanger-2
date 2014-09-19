var myApp = new Framework7();
 
var $$ = Dom7;
 
$$('.alert-text').on('click', function () {
    myApp.alert('Here goes alert text');
});
 
$$('.alert-text-title').on('click', function () {
    myApp.alert('Here goes alert text', 'Custom Title!');
});
 
$$('.alert-text-title-callback').on('click', function () {
    myApp.alert('Here goes alert text', 'Custom Title!', function () {
        myApp.alert('Button clicked!')
    });
});
 
$$('.alert-text-callback').on('click', function () {
    myApp.alert('Here goes alert text', function () {
        myApp.alert('Button clicked!')
    });
});