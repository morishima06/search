<x-app-layout>
    <div class="w-full md:w-4/5 px-3">
    <h3 class="text-2xl mb-6 font-semibold text-slate-700">アカウント詳細</h3>

    <form action="{{route('edit_check')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="">
        @foreach($userdetails as $userdetail)

            <div class="md:flex border-y md:border-slate-300   ">

                <div class="flex items-center  md:bg-slate-100">
                    <h3 class="md:pl-3 sm:w-60  font-semibold md:font-medium  flex items-center mt-1 md:mt-0">ユーザー名</h3>
                </div>
                <div class="flex items-center w-full">
                    <div class=" my-2  md:ml-3 w-full">
                
                    <input type="text" class=" w-full  md:w-60 h-8  border-slate-300 rounded-sm focus:border-none " id="user_name" name="user_name" value="{{$auth->user_name}}">
                    @if ($errors->first('user_name')) 
                        <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('user_name')}}</p>
                    @endif
                    </div>
                </div>
            </div>

            

            <div class="md:flex border-b border-slate-300  ">

                <div class="flex items-center md:bg-slate-100  ">
                    <h3 class="md:pl-3 sm:w-60  font-semibold md:font-medium flex items-center md:bg-slate-100 mt-1 md:mt-0">email(ID名)</h3>
                </div>
                <div class="flex items-center w-full ">
                    <div class=" my-2 md:ml-3 w-full">
                        <input type="text" class=" h-8 w-full md:w-60  border-slate-300 rounded-sm focus:border-none " id="email" name="email" value="{{$auth->email}}" >
                        @if ($errors->first('email')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('email')}}</p>
                        @endif
                    </div>
                   

                </div>
            </div>

            <div class="md:flex border-b border-slate-300 w-full">
            <div class="flex items-center md:bg-slate-100  ">
                    <h3 class="md:pl-3 sm:w-60  font-semibold md:font-medium flex items-center md:bg-slate-100 mt-1 md:mt-0">パスワード</h3>
                </div>
                <div class="flex items-center w-full ">
                    <div class=" my-2 md:ml-3 w-full">
                        <input type="text" class=" h-8 w-full md:w-60  border-slate-300 rounded-sm focus:border-none " id="email" name="email" value="{{$auth->password}}" >
                        @if ($errors->first('email')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('email')}}</p>
                        @endif
                    </div>
                   

                </div>


            </div>
            <div class="md:flex border-b border-slate-300  ">
                <div class="">
                    <h4 class="md:pl-3 sm:w-60   h-full font-semibold md:font-medium flex items-center md:bg-slate-100 mt-1 md:mt-0">氏名</h4>
                </div>
                
                <div class="w-full ">
                    <div class="lg:flex  my-2   ">
                        <div class="flex w-full md:w-auto">
                            <label for="NmaeSei" class="block md:ml-3 lg:mb-0 mb-1 leading-8 w-16 ">姓</label>
                            <div class="ml-2 w-full">
                                @if ($errors->first('NameSei')) 
                                <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('NameSei')}}</p>
                                @endif
                                <input type="text" class="w-48 h-8  d border-slate-300 rounded-sm focus:border-none " id="NameSei" name="NameSei" value="{{$userdetail->NameSei}}">
                            </div>
                        </div>
                        <div class="flex ">
                            <label for="NameMei" class="block md:ml-3 leading-8 w-16 ">名</label>
                            <div class="ml-2 w-full">
                                @if ($errors->first('NameMei')) 
                                <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('NameMei')}}</p>
                                @endif
                                <input type="text" class="w-48 h-8  border-slate-300 rounded-sm focus:border-none " id="NameMei" name="NameMei" value="{{$userdetail->NameMei}}">
                            </div>
                        </div>
                    </div>


                    <div class=" lg:flex my-2 ">
                        <div class="flex ">
                            <label for="NameSeiKana" class="block leading-8  w-16 md:ml-3 lg:mb-0 mb-1">姓カナ</label>
                            <div class="ml-2 w-full">
                                @if ($errors->first('NameSeiKana')) 
                                    <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('NameSeiKana')}}</p>
                                @endif
                                <input type="text" class=" w-48 h-8 border-slate-300 rounded-sm focus:border-none " id="NameSeiKana" name="NameSeiKana" value="{{$userdetail->NameSeiKana}}">
                            </div>
                        </div>
                        <div class="flex ">
                            <label for="NameMeiKana" class="block leading-8 md:ml-3  w-16">名カナ</label>
                            <div class="ml-2 w-full">
                                @if ($errors->first('NameMeiKana')) 
                                <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('NameMeiKana')}}</p>
                                @endif
                                <input type="text" class="w-48 h-8 border-slate-300 rounded-sm focus:border-none " id="NameMeiKana" name="NameMeiKana" value="{{$userdetail->NameMeiKana}}">
                            </div>

                        </div>
                    </div>

                </div>



            </div>
            
            
            <div class="md:flex border-b border-slate-300  ">
                <h4 class="md:pl-3 sm:w-60   font-semibold md:font-medium flex items-center md:bg-slate-100 mt-1 md:mt-0">生年月日</h4>
                <div class="">
                    <div class="md:ml-3 my-2">
                        @if ($errors->first('birthdayY')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('birthdayY')}}</p>
                        @endif

                        @if ($errors->first('birthdayM')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('birthdayM')}}</p>
                        @endif

                        @if ($errors->first('birthdayD')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('birthdayD')}}</p>
                        @endif
                

                    
                    <input type="text" id="birthdayY" maxlength="4" class=" h-8  border-slate-300 rounded-sm focus:border-none " placeholder="" size="4" maxlength="4" name="birthdayY" value="{{$userdetail->birthdayY}}">
                    <label for="birthdayY" maxlength="2" class=" h-8  ml-1 ">年</label>
                    <input type="text" class=" h-8 md:ml-3  border-slate-300 rounded-sm focus:border-none " placeholder="" size="2" maxlength="2" name="birthdayM" value="{{$userdetail->birthdayM}}">
                    <label for="birthdayM" class=" h-8  ml-1 ">月</label>

                    <input type="text" maxlength="2" class=" h-8 md:ml-3  border-slate-300 rounded-sm focus:border-none " placeholder="" size="2" maxlength="2" name="birthdayD" value="{{$userdetail->birthdayD}}">
                    <label for="birthdayD" class=" h-8  ml-1 ">日</label>
                    </div>
                </div>

            </div>

            <div class="md:flex border-b border-slate-300 ">
                <h4 class="md:pl-3 sm:w-60   font-semibold md:font-medium flex items-center md:bg-slate-100 mt-1 md:mt-0">性別</h4>
                <div class="flex items-center ">
                    <div class="md:ml-3 my-2 w-full">
                        <select name="sex" class="inline-block w-full md:w-60  my-2  border border-gray-300 rounded-sm focus:border-none ">
                            <option value="" <?php if($userdetail->sex == ""){echo 'selected="selected"';}?>>選択してください</option>
                            <option value="男性" <?php if($userdetail->sex == "男性"){echo 'selected="selected"';}?>>男性</option>
                            <option value="女性" <?php if($userdetail->sex == "女性"){echo 'selected="selected"';}?>>女性</option>
                            <option value="その他" <?php if($userdetail->sex == "その他"){echo 'selected="selected"';}?>>その他</option>
                        </select>
                    </div>
                 </div>
            </div>

            <div class="md:flex border-b border-slate-300">
                <h4 class="md:pl-3 sm:w-60 font-semibold  md:font-medium flex items-center md:bg-slate-100 mt-1 md:mt-0">郵便番号</h4>
                <div class="md:ml-3 my-2 ">
                    <div >
                        @if ($errors->first('zip')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('zip')}}</p>
                        @endif
                    </div>
                    <div class="lg:flex">   
                        <input type="text" maxlength="7" class=" h-8  border-slate-300 rounded-sm focus:border-none " name="zip" class="zip w-full md:w-60"  placeholder="例:1234567" value="{{$userdetail->zip}}">
                        <button type="button"  class="ajaxzip3 block border-black border-2 rounded-sm px-4 h-8 w-full md:w-60 lg:mt-0 mt-1  ml-0 lg:ml-2" href="#">郵便番号から住所を取得</button>
                    </div>
                </div>
            </div>

            <div class="md:flex border-b border-slate-300 ">
            
                <h4 class="md:pl-3 sm:w-60   font-semibold md:font-medium flex items-center  md:bg-slate-100 mt-1 md:mt-0">都道府県</h4>
                <div class="md:ml-3 my-2  ">
                @if ($errors->first('pref')) 
                    <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('pref')}}</p>
                @endif
                
                    <select name="pref" class="w-full md:w-60 pref px-2 border-slate-300" >   
                        <option value=""  <?php if($userdetail->pref == ""){echo 'selected="selected"';}?>>選択してください</option>
                        <option value="1" <?php if($userdetail->pref == "1"){echo 'selected="selected"';}?>>北海道</option>
                        <option value="2"  <?php if($userdetail->pref == "2"){echo 'selected="selected"';}?>>青森県</option>
                        <option value="3"  <?php if($userdetail->pref == "3"){echo 'selected="selected"';}?>>岩手県</option>
                        <option value="4"  <?php if($userdetail->pref == "4"){echo 'selected="selected"';}?>>宮城県</option>
                        <option value="5"  <?php if($userdetail->pref == "5"){echo 'selected="selected"';}?>>秋田県</option>
                        <option value="6"  <?php if($userdetail->pref == "6"){echo 'selected="selected"';}?>>山形県</option>
                        <option value="7"  <?php if($userdetail->pref == "7"){echo 'selected="selected"';}?>>福島県</option>
                        <option value="8"  <?php if($userdetail->pref == "8"){echo 'selected="selected"';}?>>茨城県</option>
                        <option value="9"  <?php if($userdetail->pref == "9"){echo 'selected="selected"';}?>>栃木県</option>
                        <option value="10"  <?php if($userdetail->pref == "10"){echo 'selected="selected"';}?>>群馬県</option>
                        <option value="11"  <?php if($userdetail->pref == "11"){echo 'selected="selected"';}?>>埼玉県</option>
                        <option value="12"  <?php if($userdetail->pref == "12"){echo 'selected="selected"';}?>>千葉県</option>
                        <option value="13"  <?php if($userdetail->pref == "13"){echo 'selected="selected"';}?>>東京都</option>
                        <option value="14"  <?php if($userdetail->pref == "14"){echo 'selected="selected"';}?>>神奈川県</option>
                        <option value="15"  <?php if($userdetail->pref == "15"){echo 'selected="selected"';}?>>新潟県</option>
                        <option value="16"  <?php if($userdetail->pref == "16"){echo 'selected="selected"';}?>>富山県</option>
                        <option value="17"  <?php if($userdetail->pref == "17"){echo 'selected="selected"';}?>>石川県</option>
                        <option value="18"  <?php if($userdetail->pref == "18"){echo 'selected="selected"';}?>>福井県</option>
                        <option value="19"  <?php if($userdetail->pref == "19"){echo 'selected="selected"';}?>>山梨県</option>
                        <option value="20"  <?php if($userdetail->pref == "20"){echo 'selected="selected"';}?>>長野県</option>
                        <option value="21"  <?php if($userdetail->pref == "21"){echo 'selected="selected"';}?>>岐阜県</option>
                        <option value="22"  <?php if($userdetail->pref == "22"){echo 'selected="selected"';}?>>静岡県</option>
                        <option value="23"  <?php if($userdetail->pref == "23"){echo 'selected="selected"';}?>>愛知県</option>
                        <option value="24"  <?php if($userdetail->pref == "24"){echo 'selected="selected"';}?>>三重県</option>
                        <option value="25"  <?php if($userdetail->pref == "25"){echo 'selected="selected"';}?>>滋賀県</option>
                        <option value="26"  <?php if($userdetail->pref == "26"){echo 'selected="selected"';}?>>京都府</option>
                        <option value="27"  <?php if($userdetail->pref == "27"){echo 'selected="selected"';}?>>大阪府</option>
                        <option value="28"  <?php if($userdetail->pref == "28"){echo 'selected="selected"';}?>>兵庫県</option>
                        <option value="29"  <?php if($userdetail->pref == "29"){echo 'selected="selected"';}?>>奈良県</option>
                        <option value="30"  <?php if($userdetail->pref == "30"){echo 'selected="selected"';}?>>和歌山県</option>
                        <option value="31"  <?php if($userdetail->pref == "31"){echo 'selected="selected"';}?>>鳥取県</option>
                        <option value="32"  <?php if($userdetail->pref == "32"){echo 'selected="selected"';}?>>島根県</option>
                        <option value="33"  <?php if($userdetail->pref == "33"){echo 'selected="selected"';}?>>岡山県</option>
                        <option value="34"  <?php if($userdetail->pref == "34"){echo 'selected="selected"';}?>>広島県</option>
                        <option value="35"  <?php if($userdetail->pref == "35"){echo 'selected="selected"';}?>>山口県</option>
                        <option value="36"  <?php if($userdetail->pref == "36"){echo 'selected="selected"';}?>>徳島県</option>
                        <option value="37"  <?php if($userdetail->pref == "37"){echo 'selected="selected"';}?>>香川県</option>
                        <option value="38"  <?php if($userdetail->pref == "38"){echo 'selected="selected"';}?>>愛媛県</option>
                        <option value="39"  <?php if($userdetail->pref == "39"){echo 'selected="selected"';}?>>高知県</option>
                        <option value="40"  <?php if($userdetail->pref == "40"){echo 'selected="selected"';}?>>福岡県</option>
                        <option value="41"  <?php if($userdetail->pref == "41"){echo 'selected="selected"';}?>>佐賀県</option>
                        <option value="42"  <?php if($userdetail->pref == "42"){echo 'selected="selected"';}?>>長崎県</option>
                        <option value="43"  <?php if($userdetail->pref == "43"){echo 'selected="selected"';}?>>熊本県</option>
                        <option value="44"  <?php if($userdetail->pref == "44"){echo 'selected="selected"';}?>>大分県</option>
                        <option value="45"  <?php if($userdetail->pref == "45"){echo 'selected="selected"';}?>>宮崎県</option>
                        <option value="46"  <?php if($userdetail->pref == "46"){echo 'selected="selected"';}?>>鹿児島県</option>
                        <option value="47"  <?php if($userdetail->pref == "47"){echo 'selected="selected"';}?>>沖縄県</option>
                    </select>
                </div>
            </div>

            
            <div class="md:flex border-b md:border-slate-300   ">
                <div class="flex items-center  md:bg-slate-100">
                    <h3 class="md:pl-3 sm:w-60  font-semibold md:font-medium  flex items-center mt-1 md:mt-0">市区町村</h3>
                </div>
                <div class="flex items-center w-full">
                    <div class="md:ml-3 my-2 w-full">
                    <input type="text" class=" w-full  md:w-60 h-8  border-slate-300 rounded-sm focus:border-none "  name="addr1" value="{{$userdetail->addr1}}">
                    </div>
                </div>
            </div>

            <div class="md:flex border-b md:border-slate-300   ">
                <div class="flex items-center  md:bg-slate-100">
                    <h3 class="md:pl-3 sm:w-60  font-semibold md:font-medium  flex items-center mt-1 md:mt-0">町名</h3>
                </div>
                <div class="flex items-center w-full">
                    <div class="md:ml-3 my-2 w-full">
                    <input type="text" class=" w-full  md:w-60 h-8  border-slate-300 rounded-sm focus:border-none "  name="addr2" value="{{$userdetail->addr2}}">
                    </div>
                </div>
            </div>

            <div class="md:flex border-b md:border-slate-300   ">
                <div class="flex items-center  md:bg-slate-100">
                    <h3 class="md:pl-3 sm:w-60  font-semibold md:font-medium  flex items-center mt-1 md:mt-0">番地</h3>
                </div>
                <div class="flex items-center w-full">
                    <div class="md:ml-3 my-2 w-full">
                    <input type="text" class=" w-full  md:w-60 h-8  border-slate-300 rounded-sm focus:border-none "  name="addr3" value="{{$userdetail->addr3}}">
                    </div>
                </div>
            </div>

            <div class="md:flex border-b md:border-slate-300   ">
                <div class="flex items-center  md:bg-slate-100">
                    <h3 class="md:pl-3 sm:w-60  font-semibold md:font-medium  flex items-center mt-1 md:mt-0">マンション名・部屋番号</h3>
                </div>
                <div class="flex items-center w-full">
                    <div class="md:ml-3 my-2 w-full">
                    <input type="text" class=" w-full  md:w-60 h-8  border-slate-300 rounded-sm focus:border-none "  name="addr4" value="{{$userdetail->addr4}}">
                    </div>
                </div>
            </div>

            
            @endforeach
            <div class="flex  justify-center">
                <button type="submit" class=" bg-slate-500 text-white rounded w-60 h-10 mt-8 mb-16 hover:bg-slate-400 " >変更する</button>    
            </div>
        </div>


        

    </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script>
        $('.ajaxzip3').on('click', function(){
    AjaxZip3.zip2addr('zip','','pref','addr1','addr2', 'addr3');

    //成功時に実行する処理
    AjaxZip3.onSuccess = function() {
        $('.addr3').focus();
    };
    
    //失敗時に実行する処理
    AjaxZip3.onFailure = function() {
        alert('郵便番号に該当する住所が見つかりません');
    };
    
    return false;
});
    </script>
</x-app-layout>