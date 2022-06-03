function clickEvent(e, f, g, h) {
    if (e.value.length) {
        if (h !== "") {
            document.getElementById(h).focus()
        }
    }

    if (e.key === 'Backspace') {
        if (f !== "") {
            document.getElementById(f).focus()
        }
    }
}