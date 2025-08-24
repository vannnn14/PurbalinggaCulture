/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
          sinerva: ['Sinerva', 'serif'],
          kawung: ['Kawung', 'serif'],
      },
    },
  },
    plugins: [],
  };
  