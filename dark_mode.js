const changeThemeToDark = () => {
document.documentElement.setAttribute("data-theme", "dark");
localStorage.setItem("data-theme", "dark");
}

const changeThemeToLight = () => {
document.documentElement.setAttribute("data-theme", "light");
localStorage.setItem("data-theme", 'light');
}
let theme = localStorage.getItem('data-theme');
if (theme == 'dark') changeThemeToDark();
