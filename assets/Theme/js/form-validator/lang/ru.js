/** File generated by Grunt -- do not modify
 *  JQUERY-FORM-VALIDATOR
 *
 *  @version 2.3.60
 *  @website http://formvalidator.net/
 *  @author Victor Jonsson, http://victorjonsson.se
 *  @license MIT
 */
!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],function(a){return b(a)}):"object"==typeof module&&module.exports?module.exports=b(require("jquery")):b(a.jQuery)}(this,function(a){!function(a,b){"use strict";a(b).bind("validatorsLoaded",function(){a.formUtils.LANG={errorTitle:"Ошибка отправки формы!",requiredField:"Это обязательное поле",requiredFields:"Вы задали не все обязательные поля",badTime:"Вы задали некорректное время",badEmail:"Вы задали некорректный e-mail",badTelephone:"Вы задали некорректный номер телефона",badSecurityAnswer:"Вы задали некорректный ответ на секретный вопрос",badDate:"Вы задали некорректную дату",lengthBadStart:"Значение должно быть в диапазоне",lengthBadEnd:" символов",lengthTooLongStart:"Значение длинее, чем ",lengthTooShortStart:"Значение меньше, чем ",notConfirmed:"Введённые значения не могут быть подтверждены",badDomain:"Некорректное значение домена",badUrl:"Некорретный URL",badCustomVal:"Введённое значение неверно",andSpaces:" и пробелы ",badInt:"Значение - не число",badSecurityNumber:"Введённый защитный номер - неправильный",badUKVatAnswer:"Некорректный UK VAT номер",badStrength:"Пароль не достаточно надёжен",badNumberOfSelectedOptionsStart:"Вы должны выбрать как минимум ",badNumberOfSelectedOptionsEnd:" ответов",badAlphaNumeric:"Значение должно содержать только числа и буквы ",badAlphaNumericExtra:" и ",wrongFileSize:"Загружаемый файл слишком велик (максимальный размер %s)",wrongFileType:"Принимаются файлы следующих типов %s",groupCheckedRangeStart:"Выберите между ",groupCheckedTooFewStart:"Выберите как минимум ",groupCheckedTooManyStart:"Выберите максимум из ",groupCheckedEnd:" элемент(ов)",badCreditCard:"Номер кредитной карты некорректен",badCVV:"CVV номер некорректно",wrongFileDim:"Неверные размеры графического файла,",imageTooTall:"изображение не может быть уже чем",imageTooWide:"изображение не может быть шире чем",imageTooSmall:"изображение слишком мало",min:"минимум",max:"максимум",imageRatioNotAccepted:"Изображение с таким соотношением сторон не принимается",badBrazilTelephoneAnswer:"Введённый номер телефона неправильный",badBrazilCEPAnswer:"CEP неправильный",badBrazilCPFAnswer:"CPF неправильный"}})}(a,window)});