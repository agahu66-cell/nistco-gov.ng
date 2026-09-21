<?php
/**
 * The 404 Error Template (Resource Not Found)
 * File: 404.php
 */

get_header();
?>

<main class="site-main"
    style="padding: 6rem 1.5rem; background: var(--bg-light); min-height: 70vh; display: flex; align-items: center;">
    <div class="container" style="max-width: 680px; margin: 0 auto; text-align: center;">

        <div style="font-size: 4rem; line-height: 1; margin-bottom: 1rem;">🏛️</div>

        <span
            style="color: var(--primary-color); font-weight: 800; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.75px;">
            HTTP 404 &bull; Resource Not Found
        </span>

        <h1
            style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--primary-dark); font-weight: 800; margin: 0.5rem 0 1rem 0;">
            The Requested Document or Page Does Not Exist
        </h1>

        <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; margin: 0 0 2.5rem 0;">
            The URL may have been relocated during our institutional rebrand, or the document is restricted. Use the
            search bar below or explore key portal directorates.
        </p>

        <!-- Search Bar -->
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>"
            style="display: flex; gap: 0.5rem; max-width: 480px; margin: 0 auto 2.5rem auto;">
            <input type="search" name="s" placeholder="Search publications, centres, tenders..." class="staff-input"
                style="height: 46px;" required />
            <button type="submit"
                style="background: var(--primary-color); color: #ffffff; border: none; padding: 0 1.25rem; border-radius: 6px; font-weight: 700; cursor: pointer;">
                Search
            </button>
        </form>

        <!-- Quick Gateway Links -->
        <div style="display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                style="background: var(--primary-color); color: #ffffff; padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                Return Home
            </a>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'research_centre' ) ); ?>"
                style="background: #ffffff; border: 1px solid var(--border-color); color: var(--primary-dark); padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                Research Centres
            </a>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'publication' ) ); ?>"
                style="background: #ffffff; border: 1px solid var(--border-color); color: var(--primary-dark); padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                Publications Repository
            </a>
            <a href="<?php echo esc_url( home_url( '/tenders/' ) ); ?>"
                style="background: #ffffff; border: 1px solid var(--border-color); color: var(--primary-dark); padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                Public Tenders
            </a>
        </div>

    </div>
</main>

<?php
get_footer();