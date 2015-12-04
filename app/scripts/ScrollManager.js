(function() {
    var ScrollManager = function($wrapper, callbackUp, callbackDown) {
        this.timerScrolling = null;
        this.isScrolling = false;
        this.startY = 0;
        var scope = this;
        this.callbackUp = callbackUp || null;
        this.callbackDown = callbackDown || null;
        // if(Modernizr.touchevents) {
            $wrapper[0].addEventListener(
                'touchstart',
                function(e) { scope._onTouchStart(e) },
                false
            );
            $wrapper[0].addEventListener(
                'touchmove',
                function(e) { scope._onTouchMove(e) },
                false
            );
            $wrapper[0].addEventListener(
                'touchend',
                function(e) { scope._onTouchEnd(e) },
                false
            );
            $wrapper.on('mousewheel', function(e) {
                scope._scroll(e);
            });
        // } else {
        //     $wrapper.on('mousewheel', function(e) {
        //         scope._scroll(e);
        //     });
        // }
    };
    ScrollManager.prototype = {
        _scroll : function(event) {
            var scope = this;
            if (this.timerScrolling) {
                clearTimeout(this.timerScrolling);
                this.timerScrolling = null;
            }
            //if(!E.UI.scrollIsLocked()) {
                if (!this.isScrolling) {
                    //_startScrolling(event.deltaY);
                    if(event.deltaY > 0) {
                        this.callbackDown && this.callbackDown();
                    } else {
                        this.callbackUp && this.callbackUp();
                    }
                }
                this.isScrolling = true;
                this.timerScrolling = setTimeout(function () {
                    scope.isScrolling = false;
                }, 50);
            //}
        },
        _onTouchStart : function(e) {
            this.startY = e.touches[0].pageY;
        },
        _onTouchMove : function(e) {
            var currentPosition = e.touches[0].pageY;
            var diff = Math.abs(currentPosition - this.startY);
            if(diff > 100) {
                if(!this.isScrolling) {
                    if(currentPosition > this.startY) {
                        this.callbackUp && this.callbackUp();
                    } else {
                        this.callbackDown && this.callbackDown();
                    }
                }
                this.isScrolling = true;
            }
        },
        _onTouchEnd : function(e) {
            this.startY = 0;
            this.isScrolling = false;
        }
    };
    window.ScrollManager = ScrollManager;
})();
