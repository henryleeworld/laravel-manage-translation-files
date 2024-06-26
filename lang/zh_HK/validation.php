<?php

declare(strict_types=1);

return [
    'accepted'             => '必須接受 :attribute。',
    'accepted_if'          => ':Other 為 :value 时，:attribute 必須接受。',
    'active_url'           => ':Attribute 並非一個有效的網址。',
    'after'                => ':Attribute 必須要晚於 :date。',
    'after_or_equal'       => ':Attribute 必須要等於 :date 或更晚。',
    'alpha'                => ':Attribute 只能以字母組成。',
    'alpha_dash'           => ':Attribute 只能以字母、數字、連接線(-)及底線(_)組成。',
    'alpha_num'            => ':Attribute 只能以字母及數字組成。',
    'array'                => ':Attribute 必須為陣列。',
    'ascii'                => ':Attribute 必须仅包含单字节字母数字字符和符号。',
    'before'               => ':Attribute 必須要早於 :date。',
    'before_or_equal'      => ':Attribute 必須要等於 :date 或更早。',
    'between'              => [
        'array'   => ':Attribute: 必須有 :min 至 :max 個項目。',
        'file'    => ':Attribute 必須介乎 :min 至 :max KB 之間。',
        'numeric' => ':Attribute 必須介乎 :min 至 :max 之間。',
        'string'  => ':Attribute 必須介乎 :min 至 :max 個字符之間。',
    ],
    'boolean'              => ':Attribute 必須是布爾值。',
    'can'                  => ':Attribute 字段包含未经授权的值。',
    'confirmed'            => ':Attribute 確認欄位的輸入並不相符。',
    'current_password'     => '當前密碼不正確。',
    'date'                 => ':Attribute 並非一個有效的日期。',
    'date_equals'          => ':Attribute 必須等於 :date。',
    'date_format'          => ':Attribute 與 :format 格式不相符。',
    'decimal'              => ':Attribute 必须有 :decimal 位小数。',
    'declined'             => ':Attribute 必須被拒絕。',
    'declined_if'          => '當 :other 為 :value 時，:attribute 必須被拒絕。',
    'different'            => ':Attribute 與 :other 必須不同。',
    'digits'               => ':Attribute 必須是 :digits 位數字。',
    'digits_between'       => ':Attribute 必須介乎 :min 至 :max 位數字。',
    'dimensions'           => ':Attribute 圖片尺寸不正確。',
    'distinct'             => ':Attribute 已經存在。',
    'doesnt_end_with'      => ':Attribute 不能以下列之一结尾：:values。',
    'doesnt_start_with'    => ':Attribute 不能以下列之一开头：:values。',
    'email'                => ':Attribute 必須是有效的電郵地址。',
    'ends_with'            => ':Attribute 結尾必須包含下列之一：:values。',
    'enum'                 => ':Attribute 無效。',
    'exists'               => ':Attribute 不存在。',
    'extensions'           => ':attribute 字段必须具有以下扩展名之一：:values。',
    'file'                 => ':Attribute 必須是文件。',
    'filled'               => ':Attribute 不能留空。',
    'gt'                   => [
        'array'   => ':Attribute 必須多於 :value 個項目。',
        'file'    => ':Attribute 必須大於 :value KB。',
        'numeric' => ':Attribute 必須大於 :value。',
        'string'  => ':Attribute 必須多於 :value 個字符。',
    ],
    'gte'                  => [
        'array'   => ':Attribute 必須多於或等於 :value 個項目。',
        'file'    => ':Attribute 必須大於或等於 :value KB。',
        'numeric' => ':Attribute 必須大於或等於 :value。',
        'string'  => ':Attribute 必須多於或等於 :value 個字符。',
    ],
    'hex_color'            => ':attribute 字段必须是有效的十六进制颜色。',
    'image'                => ':Attribute 必須是一張圖片。',
    'in'                   => '所揀選的 :attribute 選項無效。',
    'in_array'             => ':Attribute 沒有在 :other 中。',
    'integer'              => ':Attribute 必須是一個整數。',
    'ip'                   => ':Attribute 必須是一個有效的 IP 地址。',
    'ipv4'                 => ':Attribute 必須是一個有效的 IPv4 地址。',
    'ipv6'                 => ':Attribute 必須是一個有效的 IPv6 地址。',
    'json'                 => ':Attribute 必須是正確的 JSON 格式。',
    'list'                 => 'The :attribute field must be a list.',
    'lowercase'            => ':Attribute 必须小写。',
    'lt'                   => [
        'array'   => ':Attribute 必須少於 :value 個項目。',
        'file'    => ':Attribute 必須小於 :value KB。',
        'numeric' => ':Attribute 必須小於 :value。',
        'string'  => ':Attribute 必須少於 :value 個字符。',
    ],
    'lte'                  => [
        'array'   => ':Attribute 必須少於或等於 :value 個項目。',
        'file'    => ':Attribute 必須小於或等於 :value KB。',
        'numeric' => ':Attribute 必須小於或等於 :value。',
        'string'  => ':Attribute 必須少於或等於 :value 個字符。',
    ],
    'mac_address'          => ':Attribute 必須是一個有效的 MAC 地址。',
    'max'                  => [
        'array'   => ':Attribute 不能多於 :max 個項目。',
        'file'    => ':Attribute 不能大於 :max KB。',
        'numeric' => ':Attribute 不能大於 :max。',
        'string'  => ':Attribute 不能多於 :max 個字符。',
    ],
    'max_digits'           => ':Attribute 不得超过 :max 位。',
    'mimes'                => ':Attribute 必須為 :values 的檔案。',
    'mimetypes'            => ':Attribute 必須為 :values 的檔案。',
    'min'                  => [
        'array'   => ':Attribute 不能小於 :min 個項目。',
        'file'    => ':Attribute 不能小於 :min KB。',
        'numeric' => ':Attribute 不能小於 :min。',
        'string'  => ':Attribute 不能小於 :min 個字符。',
    ],
    'min_digits'           => ':Attribute 必须至少有 :min 位数字。',
    'missing'              => '必须缺少 :attribute 字段。',
    'missing_if'           => '当 :other 为 :value 时，必须缺少 :attribute 字段。',
    'missing_unless'       => '必须缺少 :attribute 字段，除非 :other 是 :value。',
    'missing_with'         => '存在 :values 时，必须缺少 :attribute 字段。',
    'missing_with_all'     => '存在 :values 时，必须缺少 :attribute 字段。',
    'multiple_of'          => '所揀選的 :attribute 必須為 :value 中的多個。',
    'not_in'               => '所揀選的 :attribute 選項無效。',
    'not_regex'            => ':Attribute 的格式錯誤。',
    'numeric'              => ':Attribute 必須為一個數字。',
    'password'             => [
        'letters'       => ':Attribute 必须至少包含一个字母。',
        'mixed'         => ':Attribute 必须至少包含一个大写字母和一个小写字母。',
        'numbers'       => ':Attribute 必须至少包含一个数字。',
        'symbols'       => ':Attribute 必须包含至少一个符号。',
        'uncompromised' => '给定的 :attribute 已出现数据泄漏。请选择不同的 :attribute。',
    ],
    'present'              => ':Attribute 必須存在。',
    'present_if'           => '当 :other 等于 :value 时，必须存在 :attribute 字段。',
    'present_unless'       => '除非 :other 等于 :value，否则 :attribute 字段必须存在。',
    'present_with'         => '当 :values 存在时，:attribute 字段必须存在。',
    'present_with_all'     => '当存在 :values 时，必须存在 :attribute 字段。',
    'prohibited'           => ':Attribute 字段被禁止。',
    'prohibited_if'        => '当 :other 为 :value 时，:attribute字段被禁止。',
    'prohibited_unless'    => ':Attribute 字段被禁止，除非 :other 位于 :values 中。',
    'prohibits'            => ':Attribute 不能包含 :other。',
    'regex'                => ':Attribute 的格式錯誤。',
    'required'             => ':Attribute 不能留空。',
    'required_array_keys'  => ':Attribute 必須包含指定的鍵：:values.',
    'required_if'          => '當 :other 是 :value 時 :attribute 不能留空。',
    'required_if_accepted' => '接受 :other 时需要 :attribute 字段。',
    'required_unless'      => '當 :other 不是 :values 時 :attribute 不能留空。',
    'required_with'        => '當 :values 出現時 :attribute 不能留空。',
    'required_with_all'    => '當 :values 出現時 :attribute 不能留空。',
    'required_without'     => '當 :values 留空時 :attribute field 不能留空。',
    'required_without_all' => '當 :values 都不出現時 :attribute 不能留空。',
    'same'                 => ':Attribute 與 :other 必須相同。',
    'size'                 => [
        'array'   => ':Attribute 必須是 :size 個單元。',
        'file'    => ':Attribute 的大小必須是 :size KB。',
        'numeric' => ':Attribute 的大小必須是 :size。',
        'string'  => ':Attribute 必須是 :size 個字符。',
    ],
    'starts_with'          => ':Attribute 開頭必須包含下列之一：:values。',
    'string'               => ':Attribute 必須是一個字符串',
    'timezone'             => ':Attribute 必須是一個正確的時區值。',
    'ulid'                 => ':Attribute 必须是有效的 ULID。',
    'unique'               => ':Attribute 已經存在。',
    'uploaded'             => ':Attribute 上傳失敗。',
    'uppercase'            => ':Attribute 必须大写。',
    'url'                  => ':Attribute 的格式錯誤。',
    'uuid'                 => ':Attribute 必須是有效的 UUID。',
    'attributes'           => [
        'address'                  => '地址',
        'affiliate_url'            => '附属网址',
        'age'                      => '年齡',
        'amount'                   => '数量',
        'area'                     => '区域',
        'available'                => '可用的',
        'birthday'                 => '生日',
        'body'                     => '身体',
        'city'                     => '城市',
        'content'                  => '內容',
        'country'                  => '國家',
        'created_at'               => '创建于',
        'creator'                  => '创造者',
        'currency'                 => '货币',
        'current_password'         => '当前密码',
        'customer'                 => '顾客',
        'date'                     => '日期',
        'date_of_birth'            => '出生日期',
        'day'                      => '天',
        'deleted_at'               => '删除于',
        'description'              => '描述',
        'district'                 => '区',
        'duration'                 => '期间',
        'email'                    => '電郵',
        'excerpt'                  => '摘要',
        'filter'                   => '筛选',
        'first_name'               => '名',
        'gender'                   => '性別',
        'group'                    => '团体',
        'hour'                     => '時',
        'image'                    => '图片',
        'is_subscribed'            => '已订阅',
        'items'                    => '项目',
        'last_name'                => '姓',
        'lesson'                   => '课',
        'line_address_1'           => '行地址 1',
        'line_address_2'           => '行地址 2',
        'message'                  => '信息',
        'middle_name'              => '中间名字',
        'minute'                   => '分',
        'mobile'                   => '手機',
        'month'                    => '月',
        'name'                     => '名稱',
        'national_code'            => '国家代码',
        'number'                   => '数字',
        'password'                 => '密碼',
        'password_confirmation'    => '確認密碼',
        'phone'                    => '電話',
        'photo'                    => '照片',
        'postal_code'              => '邮政编码',
        'preview'                  => '预览',
        'price'                    => '价格',
        'product_id'               => '产品编号',
        'product_uid'              => '产品UID',
        'product_uuid'             => '产品UUID',
        'promo_code'               => '促销代码',
        'province'                 => '省',
        'quantity'                 => '数量',
        'recaptcha_response_field' => '重新验证响应字段',
        'remember'                 => '记住',
        'restored_at'              => '恢复于',
        'result_text_under_image'  => '图片下方的结果文本',
        'role'                     => '角色',
        'second'                   => '秒',
        'sex'                      => '性別',
        'shipment'                 => '运输',
        'short_text'               => '短文',
        'size'                     => '大小',
        'state'                    => '状态',
        'street'                   => '街道',
        'student'                  => '学生',
        'subject'                  => '主题',
        'teacher'                  => '老师',
        'terms'                    => '条款',
        'test_description'         => '测试说明',
        'test_locale'              => '测试语言环境',
        'test_name'                => '测试名称',
        'text'                     => '文本',
        'time'                     => '時間',
        'title'                    => '標題',
        'updated_at'               => '更新于',
        'user'                     => '用户',
        'username'                 => '使用者名',
        'year'                     => '年',
    ],
];
