<?php

return [
    'success' => [
        'title'  => 'Успешно!',
        'reason' => [
            'submitted_to_post'       => 'Ответ успешно добавлен. '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'updated_post'            => trans('chatter::intro.titles.discussion'). ' успешно обновлена.',
            'destroy_post'            => 'Успешно удален ответ и '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'destroy_from_discussion' => 'Успешно удален ответ из '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'created_discussion'      => 'Успешно создана новая '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        ],
    ],
    'info' => [
        'title' => 'Между прочим!',
    ],
    'warning' => [
        'title' => 'Внимание!',
    ],
    'danger'  => [
        'title'  => 'Осторожно!',
        'reason' => [
            'errors'            => 'Пожалуйста, исправьте следующие ошибки:',
            'prevent_spam'      => 'Чтобы предотвратить спам, пожалуйста разрешите хотя бы :minutes между сохранением контента.',
            'trouble'           => 'К сожалению, похоже возникли проблемы с сохранением вашего ответа.',
            'update_post'       => 'О, черт! Не получается обновить ваш ответ. Убедитесь, что вы не творите херню.',
            'destroy_post'      => 'Офигеть. Не получается удалить ваш ответ. Убедитесь, что вы не творите херню.',
            'create_discussion' => 'Упс :( Похоже, что возникли проблемы при создании вашей новой '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        	'title_required'    => 'Не забудьте указать название',
        	'title_min'		    => 'В названии должно быть хотя бы :min символов.',
        	'title_max'		    => 'В названии может быть не более :max символов.',
        	'content_required'  => 'Пожалуйста, напишите содержание',
        	'content_min'  		=> 'В содержании должно быть хотя бы :min символов',
        	'category_required' => 'Пожалуйста укажите раздел',

       
       
        ],
    ],
];
