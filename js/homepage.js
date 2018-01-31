$(document)
    .ready(function () {

        var
            changeSides = function () {
                $('.ui.shape')
                    .eq(0)
                    .shape('flip over')
                    .end()
                    .eq(1)
                    .shape('flip over')
                    .end()
                    .eq(2)
                    .shape('flip back')
                    .end()
                    .eq(3)
                    .shape('flip back')
                    .end()
                ;
            },
            validationRules = {
                firstName: {
                    identifier: 'name',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter your name'
                        }
                    ]
                },
                email: {
                    identifier: 'email',
                    rules: [
                        {
                            type: 'email',
                            prompt: 'Please enter a valid e-mail'
                        }
                    ]
                }
            };

        $('.ui.dropdown')
            .dropdown({
                on: 'hover'
            });

        $('.ui.form')
            .form(validationRules, {
                on: 'blur'
            });

        $('.masthead .information')
            .transition('scale in', 1000);

        setInterval(changeSides, 3000);

    });