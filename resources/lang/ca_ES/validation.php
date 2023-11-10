<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'A l\'array li falta la clàusula "where"',
    'missing_update'                 => 'A l\'array li falta la clàusula "update"',
    'invalid_where_key'              => 'El JSON conté una clau invàlida per la clàusula "where"',
    'invalid_update_key'             => 'El JSON conté una clau invàlida per la clàusula "update"',
    'invalid_query_data'             => 'Hi ha dades invàlides al camp %s:%s de la consulta.',
    'invalid_query_account_type'     => 'La consulta conté comptes de diferents tipus, cosa que no és permesa.',
    'invalid_query_currency'         => 'La consulta conté comptes amb diferents preferències de moneda, cosa que no és permesa.',
    'iban'                           => 'Aquest IBAN no és vàlid.',
    'zero_or_more'                   => 'El valor no pot ser negatiu.',
    'no_asset_account'               => 'This is not an asset account.',
    'date_or_time'                   => 'El valor ha de ser una data o hora vàlida (ISO 8601).',
    'source_equals_destination'      => 'El compte d\'origen és el mateix que el compte de destí.',
    'unique_account_number_for_user' => 'Sembla que el número de compte ja està en ús.',
    'unique_iban_for_user'           => 'Sembla que l\'IBAN ja està en ús.',
    'reconciled_forbidden_field'     => 'Aquesta transacció ja està reconciliada, no pots canviar el ":field"',
    'deleted_user'                   => 'Per restriccions de seguretat, no et pots registrar amb aquesta adreça de correu electrònic.',
    'rule_trigger_value'             => 'Aquest valor és invàlid per l\'activador seleccionat.',
    'rule_action_value'              => 'Aquest valor és invàlid per l\'acció seleccionada.',
    'file_already_attached'          => 'El fitxer ":name" ja s\'havia afegit a aquest objecte.',
    'file_attached'                  => 'El fitxer ":name" s\'ha pujat satisfactòriament.',
    'must_exist'                     => 'L\'ID del camp :attribute no existeix a la base de dades.',
    'all_accounts_equal'             => 'Tots els comptes d\'aquest camp han de ser iguals.',
    'group_title_mandatory'          => 'El títol de grup és obligatori quan hi ha més d\'una transacció.',
    'transaction_types_equal'        => 'Totes les divisions han de ser del mateix tipus.',
    'invalid_transaction_type'       => 'Tipus de transacció invàlid.',
    'invalid_selection'              => 'La selecció és invàlida.',
    'belongs_user'                   => 'Aquest valor està enllaçat a un objecte que sembla que no existeix.',
    'belongs_user_or_user_group'     => 'Aquest valor està enllaçat a un objecte que sembla no existir a la teva administració financera actual.',
    'at_least_one_transaction'       => 'Necessites almenys una transacció.',
    'recurring_transaction_id'       => 'Necessites almenys una transacció.',
    'need_id_to_match'               => 'Has d\'enviar aquesta entrada amb un ID perquè l\'API sigui capaç de comparar-lo.',
    'too_many_unmatched'             => 'No s\'han pogut relacionar massa transaccions a les seves entrades respectives de la base de dades. Assegura\'t que les entrades existents tenen un ID vàlid.',
    'id_does_not_match'              => 'L\'ID enviat #:id no coincideix amb l\'ID esperat. Assegura\'t que encaixa, o omet el camp.',
    'at_least_one_repetition'        => 'Necessites almenys una repetició.',
    'require_repeat_until'           => 'Fa falta un nombre de repeticions, o una data de finalització (repeat_until). No ambdues.',
    'require_currency_info'          => 'El contingut d\'aquest camp no és vàlid sense informació de la moneda.',
    'not_transfer_account'           => 'Aquest compte no és un compte que puguis fer servir per transferències.',
    'require_currency_amount'        => 'El contingut d\'aquest camp no és vàlid sense informació de la quantitat estrangera.',
    'require_foreign_currency'       => 'Cal introduir un número a aquest camp',
    'require_foreign_dest'           => 'El valor d\'aquest camp ha de quadrar amb la moneda del compte destí.',
    'require_foreign_src'            => 'El valor d\'aquest camp ha de quadrar amb la moneda del compte font.',
    'equal_description'              => 'La descripció de la transacció no hauria de ser igual a la descripció global.',
    'file_invalid_mime'              => 'El fitxer ":name" és de tipus ":mime", el qual no s\'accepta com a pujada.',
    'file_too_large'                 => 'El fitxer ":name" és massa gran.',
    'belongs_to_user'                => 'El valor de :attribute és desconegut.',
    'accepted'                       => 'El camp :attribute s\'ha d\'acceptar.',
    'bic'                            => 'Això no és un BIC vàlid.',
    'at_least_one_trigger'           => 'La regla ha de tenir almenys un activador.',
    'at_least_one_active_trigger'    => 'La regla ha de tenir almenys un activador actiu.',
    'at_least_one_action'            => 'La regla ha de tenir almenys una acció.',
    'at_least_one_active_action'     => 'La regla ha de tenir almenys una acció activa.',
    'base64'                         => 'Aquesta dada codificada en base64 no és vàlida.',
    'model_id_invalid'               => 'L\'ID donada sembla invàlida per aquest model.',
    'less'                           => ':attribute ha de ser inferior a 10.000.000',
    'active_url'                     => 'El camp :attribute no és un URL vàlid.',
    'after'                          => 'El camp :attribute ha de ser una data posterior a :date.',
    'date_after'                     => 'La data d\'inici ha de ser prèvia a la data de fi.',
    'alpha'                          => 'El camp :attribute només pot contenir lletres.',
    'alpha_dash'                     => 'El camp :attribute només pot contenir lletres, números i guions.',
    'alpha_num'                      => 'El camp :attribute només pot contenir lletres i números.',
    'array'                          => 'El camp :attribute ha de ser un vector.',
    'unique_for_user'                => 'Ja hi ha una entrada amb aquest :attribute.',
    'before'                         => 'El camp :attribute ha de ser una data anterior a :date.',
    'unique_object_for_user'         => 'Aquest nom ja és en ús.',
    'unique_account_for_user'        => 'Aquest nom de compte ja és en ús.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => 'El camp :attribute ha d\'estar entre :min i :max.',
    'between.file'               => 'El camp :attribute ha de tenir entre :min i :max kilobytes.',
    'between.string'             => 'El camp :attribute ha de tenir entre :min i :max caràcters.',
    'between.array'              => 'El camp :attribute ha de tenir entre :min i :max elements.',
    'boolean'                    => 'El camp :attribute ha de ser cert o fals.',
    'confirmed'                  => 'La confirmació del camp :attribute no coincideix.',
    'date'                       => 'El camp :attribute no és una data vàlida.',
    'date_format'                => 'El camp :attribute no coincideix amb el format :format.',
    'different'                  => 'Els camps :attribute i :other han de ser diferents.',
    'digits'                     => 'El camp :attribute ha de tenir :digits dígits.',
    'digits_between'             => 'El camp :attribute ha de tenir entre :min i :max dígits.',
    'email'                      => 'El camp :attribute ha de ser una adreça electrònica vàlida.',
    'filled'                     => 'El camp :attribute és obligatori.',
    'exists'                     => 'El camp :attribute seleccionat no és vàlid.',
    'image'                      => 'El camp :attribute ha de ser una imatge.',
    'in'                         => 'El camp :attribute seleccionat no és vàlid.',
    'integer'                    => 'El camp :attribute ha de ser un nombre enter.',
    'ip'                         => 'El camp :attribute ha de ser una adreça IP vàlida.',
    'json'                       => 'El camp :attribute ha de ser una cadena JSON vàlida.',
    'max.numeric'                => 'El camp :attribute no pot ser més gran que :max.',
    'max.file'                   => 'El camp :attribute no pot tenir més de :max kilobytes.',
    'max.string'                 => 'El camp :attribute no pot tenir més de :max caràcters.',
    'max.array'                  => 'El camp :attribute no pot tenir més de :max elements.',
    'mimes'                      => 'El camp :attribute ha de ser un fitxer del tipus: :values.',
    'min.numeric'                => 'El :attribute ha de ser com a mínim :min.',
    'lte.numeric'                => 'El camp :attribute ha de ser inferior o igual a :value.',
    'min.file'                   => 'El camp :attribute ha de tenir com a mínim :min kilobytes.',
    'min.string'                 => 'El camp :attribute ha de tenir com a mínim :min caràcters.',
    'min.array'                  => 'El camp :attribute ha de tenir com a mínim :min elements.',
    'not_in'                     => 'El camp :attribute seleccionat no és vàlid.',
    'numeric'                    => 'El camp :attribute ha de ser un número.',
    'numeric_native'             => 'La quantitat nativa ha de ser un número.',
    'numeric_destination'        => 'La quantitat de destí ha de ser un número.',
    'numeric_source'             => 'La quantitat d\'origen ha de ser un número.',
    'regex'                      => 'El format de :attribute no és vàlid.',
    'required'                   => 'El camp :attribute és obligatori.',
    'required_if'                => 'El camp :attribute és obligatori quan :other és :value.',
    'required_unless'            => 'El camp :attribute és obligatori excepte quan :other és :values.',
    'required_with'              => 'El camp :attribute és obligatori quan :values hi sigui present.',
    'required_with_all'          => 'El camp :attribute és obligatori quan :values hi sigui present.',
    'required_without'           => 'El camp :attribute és obligatori quan :values no hi sigui present.',
    'required_without_all'       => 'El camp :attribute és obligatori quan no hi ha cap d\'aquests valors: :values.',
    'same'                       => 'Els camps :attribute i :other han de coincidir.',
    'size.numeric'               => 'El camp :attribute ha de ser :size.',
    'amount_min_over_max'        => 'La quantitat mínima no pot ser més gran que la quantitat màxima.',
    'size.file'                  => 'La mida de :attribute ha de ser :size kilobytes.',
    'size.string'                => 'El camp :attribute ha de tenir :size caràcters.',
    'size.array'                 => 'El camp :attribute ha de contenir :size elements.',
    'unique'                     => ':attribute ja s’està utilitzant.',
    'string'                     => 'El camp :attribute ha de ser una cadena de caràcters.',
    'url'                        => 'El format de :attribute no és vàlid.',
    'timezone'                   => 'El camp :attribute ha de ser una zona vàlida.',
    '2fa_code'                   => 'El camp :attribute no és vàlid.',
    'dimensions'                 => 'El camp :attribute té dimensions d\'imatge incorrectes.',
    'distinct'                   => 'El camp :attribute té un valor duplicat.',
    'file'                       => 'El camp :attribute ha de ser un fitxer.',
    'in_array'                   => 'El camp :attribute no existeix en :other.',
    'present'                    => 'El camp :attribute ha de ser-hi.',
    'amount_zero'                => 'La quantitat total no pot ser zero.',
    'current_target_amount'      => 'La quantitat actual ha de ser inferior a la quantitat objectiu.',
    'unique_piggy_bank_for_user' => 'El nom de la guardiola ha de ser únic.',
    'unique_object_group'        => 'El nom del grup ha de ser únic',
    'starts_with'                => 'El valor ha de començar per :values.',
    'unique_webhook'             => 'Ja tens un webhook amb aquesta combinació d\'URL, activador, resposta i lliurament.',
    'unique_existing_webhook'    => 'Ja tens un altre webhook amb aquesta combinació d\'URL, activador, resposta i lliurament.',
    'same_account_type'          => 'Ambdues comptes han de ser del mateix tipus',
    'same_account_currency'      => 'Ambdues comptes han de tenir la mateixa configuració de moneda',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Aquesta contrasenya no és segura. Si us plau, prova-ho de nou. Per més informació, visita https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Tipus de repetició invàlid per transaccions periòdiques.',
    'valid_recurrence_rep_moment' => 'Moment de repetició invàlid per aquest tipus de repetició.',
    'invalid_account_info'        => 'Informació de compte invàlida.',
    'attributes'                  => [
        'email'                   => 'adreça de correu electrònic',
        'description'             => 'descripció',
        'amount'                  => 'quantitat',
        'transactions.*.amount'   => 'quantitat de la transacció',
        'name'                    => 'nom',
        'piggy_bank_id'           => 'ID de la guardiola',
        'targetamount'            => 'quantitat objectiu',
        'opening_balance_date'    => 'data del saldo d\'obertura',
        'opening_balance'         => 'saldo d\'obertura',
        'match'                   => 'coincident',
        'amount_min'              => 'import mínim',
        'amount_max'              => 'import màxim',
        'title'                   => 'títol',
        'tag'                     => 'etiqueta',
        'transaction_description' => 'descripció de la transacció',
        'rule-action-value.1'     => 'valor de l\'acció de la regla #1',
        'rule-action-value.2'     => 'valor de l\'acció de la regla #2',
        'rule-action-value.3'     => 'valor de l\'acció de la regla #3',
        'rule-action-value.4'     => 'valor de l\'acció de la regla #4',
        'rule-action-value.5'     => 'valor de l\'acció de la regla #5',
        'rule-action.1'           => 'acció de la regla #1',
        'rule-action.2'           => 'acció de la regla #2',
        'rule-action.3'           => 'acció de la regla #3',
        'rule-action.4'           => 'acció de la regla #4',
        'rule-action.5'           => 'acció de la regla #5',
        'rule-trigger-value.1'    => 'valor d\'activació de la regla #1',
        'rule-trigger-value.2'    => 'valor d\'activació de la regla #2',
        'rule-trigger-value.3'    => 'valor d\'activació de la regla #3',
        'rule-trigger-value.4'    => 'valor d\'activació de la regla #4',
        'rule-trigger-value.5'    => 'valor d\'activació de la regla #5',
        'rule-trigger.1'          => 'activador de la regla #1',
        'rule-trigger.2'          => 'activador de la regla #2',
        'rule-trigger.3'          => 'activador de la regla #3',
        'rule-trigger.4'          => 'activador de la regla #4',
        'rule-trigger.5'          => 'activador de la regla #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Necessites obtenir un ID de compte d\'origen vàlid i/o un nom de compte d\'origen vàlid per continuar.',
    'withdrawal_source_bad_data'  => '[a] No s\'ha pogut trobar un compte font vàlid en cercar per l\'ID ":id" o el nom ":name".',
    'withdrawal_dest_need_data'   => '[a] Cal obtenir un identificador o nom del compte destí per a continuar.',
    'withdrawal_dest_bad_data'    => 'No s\'ha pogut trobar un compte de destí vàlid buscant l\'ID ":id" o el nom ":name".',

    'withdrawal_dest_iban_exists' => 'L\'IBAN de destí ja està sent utilitzat per un altre compte d\'actius o passius, i no pot ser utilitzat com a destinació de retirada.',
    'deposit_src_iban_exists'     => 'L\'IBAN font ja està sent utilitzat per un altre compte d\'actius o passius, i no pot ser utilitzat com a destinació de dipòsit.',

    'reconciliation_source_bad_data' => 'No s\'ha pogut trobar un compte de consolidació vàlid al cercar per la ID ":id" o el nom ":name".',

    'generic_source_bad_data' => '[e] No s\'ha pogut trobar un compte font vàlid en cercar per l\'identificador ":id" o el nom ":name".',

    'deposit_source_need_data' => 'Necessites obtenir un ID de compte d\'origen vàlid i/o un nom de compte d\'origen vàlid per continuar.',
    'deposit_source_bad_data'  => '[b] No s\'ha pogut trobar un compte font vàlid en cercar per l\'identificador ":id" o el nom ":name".',
    'deposit_dest_need_data'   => '[b] Cal obtenir un identificador i/o nom vàlid d\'un compte destí per a continuar.',
    'deposit_dest_bad_data'    => 'No s\'ha pogut trobar un compte de destí vàlid buscant l\'ID ":id" o el nom ":name".',
    'deposit_dest_wrong_type'  => 'El compte de destí enviat no és del tipus correcte.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'Necessites obtenir un ID de compte d\'origen vàlid i/o un nom de compte d\'origen vàlid per continuar.',
    'transfer_source_bad_data'  => '[c] No s\'ha pogut trobar un compte font vàlid en cercar per l\'identificador ":id" o el nom ":name".',
    'transfer_dest_need_data'   => '[c] Cal obtenir un identificador i/o nom vàlid d\'un compte destí per a continuar.',
    'transfer_dest_bad_data'    => 'No s\'ha pogut trobar un compte de destí vàlid buscant l\'ID ":id" o el nom ":name".',
    'need_id_in_edit'           => 'Cada divisió ha de tenir transaction_journal_id (ID vàlid o 0).',

    'ob_source_need_data'           => 'Necessites obtenir un ID de compte d\'origen vàlid i/o un nom de compte d\'origen vàlid per continuar.',
    'lc_source_need_data'           => 'Necessites obtenir un ID de compte d\'origen vàlid per continuar.',
    'ob_dest_need_data'             => '[d] Cal obtenir un identificador i/o nom vàlid d\'un compte destí per a continuar.',
    'ob_dest_bad_data'              => 'No s\'ha pogut trobar un compte de destí vàlid buscant l\'ID ":id" o el nom ":name".',
    'reconciliation_either_account' => 'Per enviar una consolidació, has d\'enviar un compte d\'origen o de destí. Ni ambdós, ni cap.',

    'generic_invalid_source'      => 'No pots fer servir aquest compte com a compte d\'origen.',
    'generic_invalid_destination' => 'No pots fer servir aquest compte com a compte de destí.',

    'generic_no_source'      => 'Has de confirmar l\'informació del compte font, o afegir un identificador de transacció.',
    'generic_no_destination' => 'Has de confirmar la informació del compte de destinació, o introduïr un identificador de transacció.',

    'gte.numeric' => 'El camp :attribute ha de ser més gran o igual que :value.',
    'gt.numeric'  => 'El camp :attribute ha de ser més gran que :value.',
    'gte.file'    => 'El camp :attribute ha de tenir :value kilobytes o més.',
    'gte.string'  => 'El camp :attribute ha de tenir :value caràcters o més.',
    'gte.array'   => 'El camp :attribute ha de tenir :value elements o més.',

    'amount_required_for_auto_budget' => 'Es requereix la quantitat.',
    'auto_budget_amount_positive'     => 'La quantitat ha de ser superior a zero.',
    'auto_budget_period_mandatory'    => 'El període de pressupost automàtic és un camp obligatori.',

    // no access to administration:
    'no_access_user_group'            => 'No tens accés a aquesta administració.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */

