# Blood-Bank
Designing a real-life Blood Bank system, that will be used by real users.
The application contains 2 types of users: Hospitals and Receivers.
‘Registration’ pages - Different registration pages for hospitals & receivers. Captures receiver’s blood group during registration.
‘Login’ pages - Different login pages for hospitals & receivers.
Hospital ‘Add blood info’ page - A hospital, once logged in, should be able to add details of available blood samples (along with type) to their bank. Access to this page is only restricted to hospitals.
‘Available blood samples’ page - There is a page that displays all the available blood samples along with which hospital has them and a ‘Request Sample’ button. This page is accessible to everyone, irrespective of whether the user is logged in or not. Expected functionality on click of the
'Request Sample' button- Only receivers are allowed to request for blood samples by clicking the ‘Request Sample’ button. Only those receivers who are eligible for the blood sample are allowed to click the button. If the user is not logged in, then he/she is redirected to the login
page. If a user is logged in as a hospital, then the user is not allowed to request for a blood sample.
Hospital ‘View requests’ page - Hospitals are able to see the list of all the receivers who have requested a particular blood group from its blood bank.
