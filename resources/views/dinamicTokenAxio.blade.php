
var variableName="{{env('PREFIX_VAR_JS')?env('PREFIX_VAR_JS'):'coached_inc_'}}";
function getV(name){
  return window[(variableName+name)];
}


function initialiZation_how_im_i(){
    try {

        localStorage.removeItem((variableName+'who_im_i'));
        var data_set={
          'id':{{(Auth::User()!=NULL)?Auth::User()->id:''}},
          'message':"{{(Auth::User()!=NULL)?Auth::User()->api_token:''}}",
          'token':"{{(Auth::User()!=NULL)?Auth::User()->api_token:''}}"
        };
        data_set=JSON.stringify(data_set);
        localStorage.setItem((variableName+'who_im_i'),data_set);
        return true;
    } catch(e) {
        return false;
    }
}

function auth(){
return JSON.parse(localStorage.getItem((variableName+'who_im_i')));

}

initialiZation_how_im_i();

const CancelToken = axios.CancelToken;
const source = CancelToken.source();
const api_coach = axios.create({
  baseURL: '{{url('')}}/api/',
  timeout: 6000,
  headers: {
    'X-Custom-Header': 'foobar',
    "Authorization": "Bearer "+auth().token,
    "Content-Type": "application/json",
  }
});
