const { default: Axios } = require('axios');

require('./bootstrap');

$('user-link').click(function(e){

    var linkId  = $(this).data("link_id");
    var linkUrl = $(this).attr('href');
    
    axios.post('/visits/' + linkId, {
        link: linkUrl
    })
    .then(response => console.log('response ', response))
    .catch(error => console.error('error ', error))
})