<main class="msz-container">
    <h1>Add user</h1>

    <form class='add-user-form' action='' method='POST'>
        <div class='add-user-form__item'>
            <label>Name</label>
            <input type='text' name='name' class='add-user-form__input' value='' required>
        </div>

        <div class='add-user-form__item'>
            <label>Username</label>
            <input type='text' name='username' class='add-user-form__input' value='' required>
        </div>

        <div class='add-user-form__item'>
            <label>Email</label>
            <input type='email' name='email' class='add-user-form__input' value='' required>
        </div>

        <fieldset class='add-user-form__fieldset'>
            <Legend>Address</Legend>

            <div class='add-user-form__item'>
                <label>Street</label>
                <input type='text' name='address[street]' class='add-user-form__input' value='' required>
            </div>

            <div class='add-user-form__item'>
                <label>Suite</label>
                <input type='text' name='address[suite]' class='add-user-form__input' value='' required>
            </div>

            <div class='add-user-form__item'>
                <label>City</label>
                <input type='text' name='address[city]' class='add-user-form__input' value='' required>
            </div>

            <div class='add-user-form__item'>
                <label>Zipcode</label>
                <input type='text' name='address[zipcode]' pattern="[0-9]{5}-[0-9]{4}" class='add-user-form__input'
                    placeholder='00000-0000' title="Please enter a valid postcode number (e.g. 59590-4157)" value=''
                    required>
            </div>

            <fieldset class='add-user-form__fieldset'>
                <Legend>Geo</Legend>

                <div class='add-user-form__item'>
                    <label>Lat</label>
                    <input type='text' name='address[geo][lat]' class='add-user-form__input' value='' required>
                </div>

                <div class='add-user-form__item'>
                    <label>Lng</label>
                    <input type='text' name='address[geo][lng]' class='add-user-form__input' value='' required>
                </div>
            </fieldset>
        </fieldset>

        <div>
            <label>Phone </label>
            <input type='text' name='phone' class='add-user-form__input' value='' required>
        </div>

        <div>
            <label>Website </label>
            <input type='text' name='website' class='add-user-form__input' value='' required>
        </div>


        <fieldset class='add-user-form__fieldset'>
            <Legend>Company</Legend>

            <div class='add-user-form__item'>
                <label>Name</label>
                <input type='text' name='company[name]' class='add-user-form__input' value='' required>
            </div>

            <div class='add-user-form__item'>
                <label>Catch phrase</label>
                <input type='text' name='company[catchPhrase]' class='add-user-form__input' value='' required>
            </div>

            <div class='add-user-form__item'>
                <label>Bs</label>
                <input type='text' name='company[bs]' class='add-user-form__input' value='' required>
            </div>
        </fieldset>

        <input type='submit' name='add_user' class='button button--green' value='Add user'>

    </form>
</main>