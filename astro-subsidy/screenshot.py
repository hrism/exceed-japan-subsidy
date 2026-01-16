from playwright.sync_api import sync_playwright

with sync_playwright() as p:
    browser = p.chromium.launch(headless=True)
    page = browser.new_page(viewport={'width': 1280, 'height': 800})

    # Astro dev server
    page.goto('http://localhost:4321/subsidy')
    page.wait_for_load_state('networkidle')
    page.screenshot(path='/tmp/subsidy-header.png', full_page=False)

    # Full page screenshot
    page.screenshot(path='/tmp/subsidy-full.png', full_page=True)

    browser.close()
    print("Screenshots saved to /tmp/subsidy-header.png and /tmp/subsidy-full.png")
