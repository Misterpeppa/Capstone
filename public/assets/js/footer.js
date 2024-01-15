var terms_and_conditions = document.getElementById('terms_and_conditions');
var privacy_policy = document.getElementById('privacy_policy');

var terms_and_conditions_modal = new bootstrap.Modal(document.getElementById('terms_and_conditions_modal'));
var privacy_and_policy_modal = new bootstrap.Modal(document.getElementById('privacy_and_policy_modal'));

terms_and_conditions.addEventListener('click', function () {
    terms_and_conditions_modal.show();
});