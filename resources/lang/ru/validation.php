<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является действительным URL.',
    'after' => ':attribute должен быть датой после: date.',
    'after_or_equal' => ':attribute должен быть датой после или равен: date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть датой до: date.',
    'before_or_equal' => ':attribute должен быть датой до или равен дате.',
    'between' => [
        'numeric' => ':attribute должен быть между: min и: max.',
        'file' => ':attribute должен быть между: min и: max килобайт.',
        'string' => ':attribute должен быть между: min и: max символами.',
        'array' => ':attribute должен иметь значения между: min и: max items.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение: атрибут не совпадает.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => ':attribute должен быть датой, равной: date.',
    'date_format' => ':attribute не соответствует формату: формат.',
    'different' => ':attribute и :other должны быть разными.',
    'digits' => ':attribute должен быть: цифры цифры.',
    'digits_between' => ':attribute должен быть между: min и: max digits.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute должен быть действительным адресом электронной почты.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих:: значения',
    'exists' => 'Выбранный :attribute недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должен быть больше чем: значение.',
        'file' => ':attribute должен быть больше чем: значение в килобайтах.',
        'string' => ':attribute должен быть больше чем: значение символов.',
        'array' => ':attribute должен иметь больше чем: значение элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должен быть больше или равен: значение.',
        'file' => ':attribute должен быть больше или равен: значение в килобайтах.',
        'string' => ':attribute должен быть больше или равен символам: значение.',
        'array' => ':attribute должен иметь: элементы значения или более.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'Выбранный :attribute недействителен.',
    'not_regex' => 'The :attribute Неверный формат',
    'numeric' => 'The :attribute должен быть числом.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'The :attribute Неверный формат.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательное, когда :other is :value.',
    'required_unless' => 'Поле :attribute является обязательным, если :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательное, если присутствует :values присутствует.',
    'required_with_all' => 'Поле :attribute обязательное, когда :values присутствуют.',
    'required_without' => 'Поле :attribute обязательное, если :values отсутствуют.',
    'required_without_all' => 'Поле :attribute обязательное, если нет ни одного из: значений.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
