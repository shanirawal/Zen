import type { Config } from "tailwindcss";

export default {
  content: [
    "./src/**/*.{php,html,js,ts,jsx,tsx}",
    "./*.{php,html,js}"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
} satisfies Config;
