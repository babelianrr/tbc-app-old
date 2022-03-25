<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //-------------------------------------------------------------
    // Rules
    //-------------------------------------------------------------
    public $user = [
        'username' => [
            'rules' => 'required|min_length[5]|is_unique[users.username]'
        ],
        'password' => [
            'rules' => 'required|min_length[8]'
        ],
        'repeatPassword' => [
            'rules' => 'required|matches[password]'
        ],
        'name' => [
            'rules' => 'required|min_length[3]'
        ],
        'email' => [
            'rules' => 'required|valid_email'
        ],
        'birth_date' => [
            'rules' => 'required|valid_date'
        ],
        'address' => [
            'rules' => 'required'
        ],
        'phone' => [
            'rules' => 'is_natural'
        ],
        'avatar' => [
            'rules' => 'uploaded[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/gif,image/png]|max_size[avatar,1024]'
        ]
    ];

    public $userUpdate = [
        'username' => [
            'rules' => 'required|min_length[5]|is_unique[users.username,id,{id}]'
        ],
        'name' => [
            'rules' => 'required|min_length[3]'
        ],
        'email' => [
            'rules' => 'required|valid_email'
        ],
        'birth_date' => [
            'rules' => 'required|valid_date'
        ],
        'address' => [
            'rules' => 'required'
        ],
        'phone' => [
            'rules' => 'is_natural'
        ],
        'avatar' => [
            'rules' => 'mime_in[avatar,image/jpg,image/jpeg,image/gif,image/png]|max_size[avatar,1024]',
        ]
    ];

    public $login = [
        'user-username' => [
            'rules' => 'required'
        ],
        'user-password' => [
            'rules' => 'required'
        ]
    ];

    public $thread = [
        'title' => [
            'rules' => 'required|min_length[3]'
        ],
        'category-id' => [
            'rules' => 'required'
        ],
        'content' => [
            'rules' => 'required'
        ],
    ];
    public $reply = [
        'reply_body' => [
            'rules' => 'required|min_length[10]'
        ],
    ];
}
