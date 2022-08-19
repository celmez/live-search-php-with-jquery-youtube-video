$(document).ready(function()
{
    $('#word').keyup(function()
    {
        var value = $(this).val()
        var data = "value="+value

        if( value == '' )
        {
            $('.search-result').css('display', 'none')
        }

        else
        {
            $.ajax
            (
                {
                    type: 'POST',
                    url: 'http://localhost/dersler/live-search/api.php',
                    data: data,
                    success: function(e)
                    {
                        $('.search-result').css('display', 'block')
                        $('.search-result').html(e)
                    }
                }
            )
        }
    })
})