$(document).ready(function(){
  var suggester = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
      cache: 'false',
      url: $('.typeahead').data('suggest-url'),
      prepare: function(sword, settings) {
        settings.type = 'POST';
        settings.data = {
          tx_comsolitsuggest_suggest: {
            search: sword,
            method: 'suggest'
          }
        };
        return settings;
      },
      transport: function (ajaxOptions, onSuccess, onError) {
        ajaxOptions.dataType = "html";
        $.ajax(ajaxOptions).done(done).fail(fail);

        function done(data, textStatus, request) {
          onSuccess(JSON.parse(removeHTML(data)));
        }

        function fail(request, textStatus, errorThrown) {
          onError(errorThrown);
        }
      }
    }
  });
  suggester.initialize();
  $('.typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: $('.typeahead').data('suggest-min-length') ?? 1,
  }, {
    limit: $('.typeahead').data('suggest-limit') ?? 10,
    displayKey: 'value',
    source: suggester.ttAdapter()
  })
    .on('typeahead:selected', function(e){
      e.target.form.submit();
    });
  function removeHTML(input){
    return input.replace(/<\/?[^>]+>/gi, '');
  }
});
