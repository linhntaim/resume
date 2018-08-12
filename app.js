$(document).ready(function () {
    var _$nav = $('body > nav');
    var _$header = $('body > header');
    var _$dropdownBars = _$nav.find('.dropdown-bars');

    var _displayNav = function () {
        if (_$nav.offset().top > _$header.height() - 32) {
            _$nav.removeClass('hidden');
        } else {
            if (_$dropdownBars.parent().hasClass('open')) {
                _$dropdownBars.trigger('click');
            }
            _$nav.addClass('hidden');
        }
    };

    $(window).scroll(_displayNav);
    _displayNav();

    $('a.page-scroll').on('click', function (e) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - _$nav.height()
        }, 1500, 'easeInOutExpo');
        e.preventDefault();
    });

    $('body > main .h3').on('click', function (e) {
        $(this).next().toggle('slow');
        e.preventDefault();
    });

    $('body > main .title').on('click', function (e) {
        $(this).next().next().toggle('slow');
        e.preventDefault();
    });

    var _$modalDownload = $('#modal-download');
    _$modalDownload.on('shown.bs.modal', function (e) {
        var data = $(e.relatedTarget).data();
        if (data && data.download) {
            $(data.download).children('a').addClass('active');
        }
    }).on('hidden.bs.modal', function (e) {
        _$modalDownload.find('.active').removeClass('active');
    });
    _$modalDownload.find('.modal-body a').on('click', function () {
        _$modalDownload.find('.active').removeClass('active');
    });

    var _$modalEmpty = $('#modal-empty');

    function modalEmpty(title, content, timeout, hideCallback) {
        _$modalEmpty.modal('hide');
        setTimeout(function () {
            _$modalEmpty.find('.modal-title').html(title);
            _$modalEmpty.find('.modal-body').html(content);
            _$modalEmpty.modal('show');
            if (hideCallback) {
                _$modalEmpty.on('hide.bs.modal', function () {
                    hideCallback.call(_$modalEmpty);
                    _$modalEmpty.off('hide.bs.modal');
                });
            }
            if (timeout) {
                setTimeout(function () {
                    _$modalEmpty.modal('hide');
                }, timeout);
            }
        }, 500);
    }

    function checkKeyPressed(keyCode) {
        return (keyCode >= 37 && keyCode <= 40) // arrows
            || (keyCode >= 48 && keyCode <= 57) // 0-9
            || checkAlphabetKeyPressed(keyCode) // a-z
            || (keyCode >= 96 && keyCode <= 111) // numpad
            || (keyCode >= 186 && keyCode <= 192) // ;=,-./`
            || (keyCode >= 219 && keyCode <= 222) // [\]'
            || checkFunctionKeyPressed(keyCode); // f1, f2
    }

    function checkAlphabetKeyPressed(keyCode) {
        return keyCode >= 65 && keyCode <= 90; // a-z
    }

    function checkFunctionKeyPressed(keyCode) {
        return [112, 113].indexOf(keyCode) != -1; // f1, f2
    }

    var _commands = {
        commands: {},
        noTry: false,
        stack: [''],
        timeoutTrying: null,
        register: function (commandName, data, runCallback) {
            this.commands[commandName] = {
                data: data,
                runCallback: runCallback
            };
        },
        resetTryToRun: function () {
            this.stack = [''];
        },
        tryToRun: function (char) {
            var self = this;
            if (self.noTry) {
                self.resetTryToRun();
                return;
            }
            // timeout for buffering before trying to run
            if (self.timeoutTrying) {
                clearTimeout(self.timeoutTrying);
            }
            self.stack.push(self.stack.pop() + char);
            self.timeoutTrying = setTimeout(function () {
                var commandText = self.stack.join('').toLowerCase();
                for (var commandName in self.commands) {
                    var command = self.commands[commandName];
                    var commandWords = commandName.split('|');
                    for (var index in commandWords) {
                        var commandWord = commandWords[index].toLowerCase();
                        var word = commandText.substr(commandText.length - commandWord.length);
                        if (word == commandWord) {
                            command.runCallback.call(command, commandWord);
                            self.resetTryToRun();
                            return;
                        }
                    }
                }
            }, 500);
        },
        run: function (commandWord) {
            this.resetTryToRun();
            commandWord = commandWord.toLowerCase();
            for (var commandName in this.commands) {
                if (commandName.toLowerCase().split('|').indexOf(commandWord) != -1) {
                    var command = this.commands[commandName];
                    if (command) {
                        command.runCallback.call(command, commandWord);
                        return true;
                    }
                }
            }
            return false;
        }
    };
    $(document).on('click', '.command-open', function (e) {
        e.preventDefault();
        _commands.run('command');
    });
    _commands.register('help', null, function () {
        modalEmpty(TRANS.help, TRANS.help_content);
    });
    _commands.register('vi', null, function () {
        window.location.href = VARS.URL_VI;
    });
    _commands.register('en', null, function () {
        window.location.href = VARS.URL_EN;
    });
    $(document).on('change', '#command-line', function () {
        var $commandLine = $(this),
            $inputGroup = $commandLine.closest('.input-group'),
            commandWord = $commandLine.val(),
            message = null;

        $inputGroup.next().remove();
        if (commandWord.trim().length == 0) {
            message = TRANS.command_not_empty;
        }
        else if (!_commands.run(commandWord)) {
            message = TRANS.command_not_valid;
        }
        if (message != null) {
            $inputGroup.after('<div class="help-block">' + message + '</div>');
            return;
        }

        _$modalEmpty.modal('hide');
    }).on('click', '#command-run', function (e) {
        e.preventDefault();
        $('#command-line').trigger('change');
    });
    _commands.register('cmd|run|console|command', null, function () {
        modalEmpty(
            TRANS.run_command,
            '<div class="form-group">' +
            '<label class="sr-only" for="console">' + TRANS.command + '</label>' +
            '<div class="input-group">' +
            '<input id="command-line" name="command-line" type="text" class="form-control">' +
            '<span id="command-run" class="input-group-addon">↵</span>' +
            '</div>' +
            '</div>',
            null,
            function () {
                _commands.noTry = false;
            }
        );
        _commands.noTry = true;
        setTimeout(function () {
            $('#command-line').focus();
        }, 1000);
    });
    _commands.register('refresh', null, function () {
        var seconds = 3;
        modalEmpty(TRANS.reload, TRANS.reload_after.replace(':second', seconds));
        setTimeout(function () {
            window.location.reload(true);
        }, seconds * 1000);
    });
    _commands.register('hello|hi', {
        messages: [
            TRANS.how_are_you,
            TRANS.nice_day,
            TRANS.glhf,
            TRANS.wish
        ],
        oldIndex: -1,
        randomIndex: function () {
            var randomIndex = Math.floor(Math.random() * this.messages.length);
            while (randomIndex == this.oldIndex) {
                randomIndex = Math.floor(Math.random() * this.messages.length)
            }
            this.oldIndex = randomIndex;
            return randomIndex;
        },
        randomMessage: function () {
            return this.messages[this.randomIndex()];
        }
    }, function (commandWord) {
        modalEmpty(commandWord == 'hi' ? TRANS.hi : TRANS.hello, this.data.randomMessage());
    });
    _commands.register('music', {
        rythm: null,
        playing: false,
        start: function () {
            if (this.rythm == null) {
                this.rythm = new Rythm();
            }
            this.rythm.setMusic(VARS.MUSIC);
            this.rythm.start();
            this.playing = true;
        },
        stop: function () {
            this.rythm.stop();
            this.playing = false;
        },
        play: function () {
            console.log(this);
            if (this.playing) {
                this.stop();
                modalEmpty(TRANS.music, TRANS.music_off, 3000);
            }
            else {
                this.start();
                modalEmpty(TRANS.music, TRANS.music_on, 4000);
            }
        }
    }, function () {
        this.data.play();
    });
    _commands.register('expand|show', null, function () {
        $('body > main .title').each(function () {
            if ($(this).next().next().is(':hidden')) {
                $(this).trigger('click');
            }
        });

        $('body > main .h3').each(function () {
            if ($(this).next().is(':hidden')) {
                $(this).trigger('click');
            }
        });

        _$modalEmpty.modal('hide');
    });
    _commands.register('collapse|hide', null, function () {
        $('body > main .h3').each(function () {
            if ($(this).next().is(':visible')) {
                $(this).trigger('click');
            }
        });

        $('body > main .title').each(function () {
            if ($(this).next().next().is(':visible')) {
                $(this).trigger('click');
            }
        });

        _$modalEmpty.modal('hide');
    });
    _commands.register('download', null, function () {
        _$modalDownload.modal('show');
    });

    $(document).on('keydown', function (e) {
        if (checkFunctionKeyPressed(e.which)) {
            if (e.which == 112) {
                _commands.run('help');
                e.preventDefault();
            }
        }
    }).on('keyup', function (e) {
        e.preventDefault();
        if (checkAlphabetKeyPressed(e.which)) {
            _commands.tryToRun(e.key);
        }
        else {
            _commands.resetTryToRun();
        }
    });

    $(document).on('click', '.help', function (e) {
        e.preventDefault();
        _commands.run('help');
    });

    // enable modals to stack together
    var _zIndexModal = 1050;
    $(document).on('shown.bs.modal', '.modal', function (e) {
        $('.modal-backdrop:last').css('z-index', ++_zIndexModal);
        $(this).css('z-index', ++_zIndexModal);
    }).on('hidden.bs.modal', '.modal', function (e) {
        _zIndexModal -= 2;
    });
});