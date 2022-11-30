/*window.MainHeader = function () {
    return {
        isSlim: false,
        hidePreHeader: false,
        showBgColor: false,
        lastScrollTop: 0,
        showMobileMenu: false,
        onScroll() {
            // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
            let scrolled = window.pageYOffset || document.documentElement.scrollTop;

            if (scrolled > this.lastScrollTop && scrolled > 80) {
                // downscroll code
                this.isSlim = true;
                this.showBgColor = true;

                if (scrolled > 300) {
                    this.hidePreHeader = true;
                }
            } else {
                // upscroll code
                this.isSlim = false;
                this.hidePreHeader = false;

                if (scrolled < 80) {
                    this.showBgColor = false;
                }
            }

            this.lastScrollTop = scrolled;
        },
        toggleMobileMenu() {
            this.showMobileMenu = !this.showMobileMenu;
        }
    }
}*/

document.addEventListener('alpine:init', () => {
    Alpine.data('MainHeader', () => ({
        isSlim: false,
        hidePreHeader: false,
        showBgColor: false,
        lastScrollTop: 0,
        showMobileMenu: false,
        onScroll() {
            // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
            let scrolled = window.pageYOffset || document.documentElement.scrollTop;

            if (scrolled > this.lastScrollTop && scrolled > 80) {
                // downscroll code
                this.isSlim = true;
                this.showBgColor = true;

                if (scrolled > 300) {
                    this.hidePreHeader = true;
                }
            } else {
                // upscroll code
                this.isSlim = false;
                this.hidePreHeader = false;

                if (scrolled < 80) {
                    this.showBgColor = false;
                }
            }

            this.lastScrollTop = scrolled;
        },
        toggleMobileMenu() {
            this.showMobileMenu = !this.showMobileMenu;
        }
    }))
})