<?/* пример
<div id="modal-estimate" class="modal modal-big">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Добавить в смету</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <select
                                id=""
                                class="input-reset form__input form__input--select2 js-select2"
                                name=""
                                required
                        >
                            <option value="0">Смета 03.02.2023 12:58:02</option>
                            <option value="1">Селект 2</option>
                            <option value="2">Селект 3</option>
                        </select>
                        <div class="form__field-ps">
                            <span class="text-secondary-color">Выберите смету из существующих или введите название новой</span>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button
                            class="btn-reset btn btn-primary"
                            type="submit"
                            data-notice="compare"
                    >
                        <span class="btn__text">Добавить в смету</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
*/?>

<div id="modal-request" class="modal modal-without-close">
    <div class="modal__content">
        <div class="modal__header">
            <div class="modal__title h4">Оставьте заявку</div>
            <div class="modal__subtitle h6">И получите расчет стоимости вашей игры</div>
        </div>

        <form id="" class="modal__form" method="" action="javascript:;">
            <div class="modal__form-item modal__form-inputs flag-bg-wide">
                <div class="input-wrapper input-wrapper-icon input-wrapper-name">
                    <input
                            class="input-reset input"
                            type="text"
                            name=""
                            placeholder="ВАШЕ ИМЯ"
                            value=""
                            autocomplete="off"
                            required
                    >
                </div>
                <div class="input-wrapper input-wrapper-icon input-wrapper-tel">
                    <input
                            class="input-reset input isPhone"
                            type="tel"
                            name=""
                            placeholder="НОМЕР ТЕЛЕФОНА"
                            value=""
                            autocomplete="off"
                            required
                    >
                </div>
                <button class="btn-reset btn btn-mini btn-primary" type="button" data-fancybox data-src="#modal-thx"> <?/* in backend version must be type="submit" */?>
                    <span class="btn__text">УЗНАТЬ СТОИМОСТЬ</span>
                    <span class="btn-primary__effects"></span>
                </button>
            </div>
            <div class="modal__form-item">
                <span class="custom-checkbox">
                    <input id="checkbox-agree" class="custom-checkbox__input" type="checkbox" checked>
                    <label for="checkbox-agree" class="custom-checkbox__label-for">Я даю свое согласие на обработку персональных данных и соглашаюсь с условиями и политикой конфиденциальности</label>
                </span>
            </div>
        </form>
    </div>
</div>

<div id="modal-thx" class="modal modal-thx">
    <div class="modal__content">
        <div class="modal__header">
            <div class="modal__title h1">Спасибо за заявку!</div>
            <div class="modal__subtitle h4">Скоро мы свяжемся с Вами</div>
        </div>
    </div>
</div>