<?php

return [
    'alipay' => [
        'app_id'         => '2016101100658505',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqGYWl3W1KenyjJPBrnM8v0eEwEUcAY/enjc0jaOLE7HfTydfi9RdalvWx0uYoCgwQ5gCuYADo5Dz8J4mRfUt+QA01L0scHVqFBGFiQVMDaHOydzVwHHCJJYwMYOB5TKoaW+fkZWR3bzWcYWJ8eiSqFUkJ7CchPWa22QVgqqFXw9iBFVEyXcndsz3ddo7KcfgJf/rQP0mmD2S72+Fq9Fh5Er1Sy30Qw108MP8WW4VY8vtYeKrOeY8xB93x555A+BDRenxJBNqaGz/A3qeMoQBHqxV0y32nAkSVLMgKdBOalTNmr3sbRs4uaUqsxffKk+yyAvE8f/eNai0GmFAvC+XgQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAwRdhicIztCWTAbUq0e6Nf8Y25WTFUrYLTZ+3RoYQPwjQM6a0XKIRkMHMUryDBz3Xx0IONiwGAlGNeb7RqDkXotYKPT+R9c4GZ2fmcK+OtZ/2vIQOR2uuA516e3sEgfp5b7KPRk5Q+kV10wadHr3jGHHUEB0N9yy/Kzwzm8Sy3Iy+pkU1jt63kNZIiAzi5e0Yd1i0+YH6cvQLFHwXCZScPMpO64isiV3QPUnUwo2iGR0Z6nI+TJwpr0RYhOUnxYJF8OjAIKyqbT5r6TCgfX2EVbbIdCLt3A5bTakzZIKWCs6t97rWx86Fad7d+HwKc89bHpnUlNsE+tVJrnf1iVBM2wIDAQABAoIBAHncmLlJcDokcJfmT6T4SiM25JR3ubUOoSmXQCLpHz25ATVn43KG8lEKjjo1MPiUBieCP9fehthVwdTxIf5qMcmaDhJDmYmpQg9m2l+J3KYx05V8PkrC4ar0a0WdCOZDPvrIlXXInYCl78uD5AtvyfA2fqDAxXyWp/vQXb3UMRHRRRhBcX0PbNEgCXk31fqTlU054NLknerPn3jX+M9Lj2ij+td5Un8onqf9gGv5zsPvPyPrVvgZiPXxDD/7J1T0zxFf7td7YDwhaGwsOqXroN5XkbNlf6LBCMDOzQNdKZ7gTiPdh120/xg0dNm1/uZ+6dy69jGuJkysVsEcY9xCVTECgYEA42ptnfswRAWVEbkBQ0CrQyRSN4UX6bN9zDpoQ0PFwywRDdbQ+i4ZkFTvY4/QKBNqIqVCzP0ApD7EGBaHwoUXenmwuqMDJP8ohcroVMU+2DGoDdXrYGcGT8mn3moShYj4UYQo/QKSXz/o6cU9FJlucSfWuSih+3ATdE4QEFGZp1MCgYEA2Vx+f0fE2GpdejdMPvh9In64sF0wXnQHPJ1Wi4QTAFRlbZk4JtznKYEgGr9xRjfx0aARTQg6aLrkMm/KxdMBlLgiINCEtu4EPkhkHkayzjhLT4RLZtvD5YBU2lciqO1fXqXK6Mv/a3vnswl+P9tSDQqebEiJ66khfPVI76e3O1kCgYEA2rIOmE5nLALySAjR3grip77WEe48ANJLt4qzmXwjQn2uKNDcRrrueo4zaFt0ohWJi6fBhcAITerOSRvhkn7LBUzhV5pL+9gk8AUhR+Qne2DFbAi8QgjRWQlkFc+L4D7IDhw6DpXajR64rZawFo82VjspkwYwP8yX6NDpQcg3K2ECgYAO2F5bWw96qGkR+8zdUCNbw8PhZ7vx94K3BRfwF2kk0J7MyXYoUVYIY6VJrmGSJigB5SjJVhKHLJyBRVlYAX1OJvVNwHAP/lmT12XfG30C0J10JNjxgXjzp7wj3WekmfG1iSU+mRAsyx2cAL36poQIF/2R77JbwgVjf20n0RCWoQKBgBeI9mNRSaCJUs3AZG51nJe/03TJS7qFOhSSmGONDHzIXvk+Koi+ReG7f0tHtueXBnTFxOzsFHy+T3FkwN88TLzj7u/8NJrG0heNXe0XZUaqigwWAix3u6j8rfP8lTEVUNWYE2npmFIdCWHlGe+HgPPD5LHSbnRWn+zJNWkjBVtx',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];