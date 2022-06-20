<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/mahasiswa', 'Mahasiswacontroler@mahasiswa');

Route::get('/mahasiswa/cari', 'Mahasiswacontroler@pencaarian');

Route::get('/mahasiswa/formulir', function () {
    return view('formulirMHS');
   });

//Route::get('/mahasiswa/formulir', 'Mahasiswacontroler@pencaarian');

Route::post('/mahasiswa/simpanmahasiswa', 'Mahasiswacontroler@inputmhs');

Route::get('/mahasiswa/editmhs/{id}', 'Mahasiswacontroler@editmhs')->middleware('auth');

Route::put('/mahasiswa/updatemahasiswa/{id}', 'Mahasiswacontroler@updatemhs');

Route::get('/mahasiswa/deletemahasiswa/{id}', 'Mahasiswacontroler@deletemhs')->middleware('auth');






Route::group(['middleware' => ['auth']], function () {


});


Route::get('/dosen', 'Dosencontroler@dosen');

Route::get('/dosen/cari', 'Dosencontroler@pencaarian');

Route::get('/dosen/formulir', function () {
    return view('formulirDSH');
   });


Route::post('/dosen/simpandosen', 'Dosencontroler@inputdsh');

Route::get('/dosen/editdosen/{id}', 'Dosencontroler@editdsh')->middleware('auth');

Route::put('/dosen/updatedosen/{id}', 'Dosencontroler@updatedsh')->middleware('auth');

Route::get('/dosen/deletedosen/{id}', 'Dosencontroler@updatedsh')->middleware('auth');

Route::get('/user', 'AuthController@user')->middleware('auth');

Route::get('/user/formuliruser', 'AuthController@formuliruser')->middleware('auth');

Route::post('/user/simpanuser', 'AuthController@inputuser')->middleware('auth');

Route::get('/user/deleteuser/{id}', 'AuthController@deleteuser')->middleware('auth');

Route::get('/user/edituser/{id}', 'AuthController@edituser')->middleware('auth');

Route::put('/user/updateuser/{id}', 'AuthController@updateuser')->middleware('auth');

Route::post('/user/ceklogin', 'AuthController@ceklogin2');

Route::get('/home', 'AuthController@home');


Route::get('/', 'AuthController@login')->name('login');

Route::get('/logout', 'AuthController@logout');


Route::get('/produk', function () {
    $produk = [
        [
            "image" => "solo_leveling.jpg",
            "title" => "solo leveling",
            "body"  => "Hunters, humans who possess magical abilities, must battle deadly monsters to protect the human race from certain annihilation. A notoriously weak hunter named Sung Jinwoo finds himself in a seemingly endless struggle for survival. One day, after narrowly surviving an overwhelmingly powerful double dungeon that nearly wipes out his entire party, a mysterious program called the System chooses him as its sole player and in turn, 
            gives him the extremely rare ability to level up in strength, possibly beyond any known limits. Jinwoo sets on a journey as he fights against all kinds of enemies, both man and monster, to discover the secrets of the dungeons and the true source of his powers."
        ],
        [
            "image" => "lightning_th.jpg",
            "title" => "The Lightning Thief",
            "body"  => "The Lightning Thief is a 2005 American-fantasy-adventure novel based on Greek mythology, the first young adult novel written by Rick Riordan in the Percy Jackson & the Olympians series. It won the Adult Library Services Association Best Books for Young Adults, among other awards. It was adapted into a film named Percy Jackson & the Olympians: The Lightning Thief released in the United States on February 12, 2010. On May 14, 2020, Riordan announced that a live-action TV series for Disney+ would adapt the Percy Jackson & the Olympians series, with the first season covering The Lightning Thief. The novel is followed by The Sea of Monsters and spawned two sequel series (The Heroes of Olympus and The Trials of Apollo) and the extended universe of the Camp Half-Blood Chronicles."
        ],
        [
            "image" => "The_Maze_Runner_poster.jpg",
            "title" => "The Maze Runner (film)",
            "body"  => "The Maze Runner is a 2014 American dystopian science fiction film directed by Wes Ball, in his directorial debut, based on James Dashner's 2009 novel of the same name. The film is the first installment in The Maze Runner film series and was produced by Ellen Goldsmith-Vein, Wyck Godfrey, Marty Bowen, and Lee Stollman with a screenplay by Noah Oppenheim, Grant Pierce Myers, and T.S. Nowlin. The film stars Dylan O'Brien, Kaya Scodelario, Aml Ameen, Thomas Brodie-Sangster, Ki Hong Lee, Will Poulter, and Patricia Clarkson. The story follows sixteen-year-old Thomas, portrayed by O'Brien, who awakens in a rusty elevator with no memory of who he is, only to learn that he has been delivered to the middle of an intricate maze, along with many other boys, who have been trying to find their way out of the ever-changing labyrinth – all while establishing a functioning society in what they call the Glade."
        ],
        [
            "image" => "Avengers-Endgame-poster.jpg",
            "title" => "avengers: endgame",
            "body"  => "After half of all life is snapped away by Thanos, the Avengers are left scattered and divided. Now with a way to reverse the damage, the Avengers and their allies must assemble once more and learn to put differences aside in order to work together and set things right."
        ],
        [
            "image" => "katana.jpg",
            "title" => "katana",
            "body"  => "A katana (刀, かたな) is a Japanese sword characterized by a curved, single-edged blade with a circular or squared guard and long grip to accommodate two hands. Developed later than the tachi, it was used by samurai in feudal Japan and worn with the edge facing upward."
        ]
        ];
    
    return view('produk',['cek' => 'produk'],
    [ "title" => "posts",
    "posts" => $produk

    ]);
   });
